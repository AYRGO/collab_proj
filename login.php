<?php
session_start();
require 'include/landing/connect.php';

// Define the helper function to log actions for the admin
function insertAdminAction($admin_id, $action) {
    global $pdo; // Make sure to use the same PDO connection
    $sql = "INSERT INTO admin_audit_trail (admin_id, action, timestamp) VALUES (:admin_id, :action, NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':admin_id' => $admin_id, ':action' => $action]);
}

// Define the helper function to log actions for the user
function insertUserAction($user_id, $action) {
    global $pdo; // Make sure to use the same PDO connection
    $sql = "INSERT INTO user_audit_trail (user_id, action, timestamp) VALUES (:user_id, :action, NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':user_id' => $user_id, ':action' => $action]);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = trim($_POST['login']);
    $password = $_POST['password'];

    try {
        // Check if login is email or username
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            // Query for user registration
            $sql = "SELECT * FROM user_registration WHERE email = :login";
        } else {
            // Query for administrator login, ensure 'admin_id' is fetched in the SELECT query
            $sql = "SELECT * FROM administrator WHERE username = :login";
        }

        // Prepare and execute the query
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':login' => $login]);

        // Fetch user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Store user details in session
                $_SESSION['user'] = $user;
                
                // Add additional user details (e.g., fname, lname, dob, usertype) to session
                if (isset($user['fname'])) {
                    $_SESSION['user']['fname'] = $user['fname'];
                }
                if (isset($user['lname'])) {
                    $_SESSION['user']['lname'] = $user['lname'];
                }
                if (isset($user['dob'])) {
                    $_SESSION['user']['dob'] = $user['dob'];
                }
                $_SESSION['user']['usertype'] = isset($user['user_type']) ? $user['user_type'] : 'user'; // Default to 'user' if not set
                
                // Fetch the photo from pwdcard_applications table
                $photo_sql = "SELECT photo FROM pwdcard_applications WHERE user_id = :user_id";
                $photo_stmt = $pdo->prepare($photo_sql);
                $photo_stmt->execute([':user_id' => $user['id']]);
                $photo_data = $photo_stmt->fetch(PDO::FETCH_ASSOC);
                
                // Check if photo exists and set session value
                if ($photo_data && !empty($photo_data['photo'])) {
                    $_SESSION['user']['photo'] = 'http://localhost/pwd/include/registration_code/' . htmlspecialchars($photo_data['photo']);
                } else {
                    $_SESSION['user']['photo'] = 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'; // Default photo if no photo in pwdcard_applications
                }

                // If the user is an admin, log the admin action
                if (isset($user['user_type']) && $user['user_type'] === 'admin') {
                    // Store the admin's ID in session
                    if (isset($user['admin_id'])) {
                        $_SESSION['admin_id'] = $user['admin_id']; // Store admin ID in session
                    } else {
                        // Handle the case where the admin ID is not found
                        echo "Admin ID is missing in the database.";
                        exit;
                    }

                    // Update the last login time
                    $updateSql = "UPDATE administrator SET last_login = NOW() WHERE username = :login";
                    $stmt = $pdo->prepare($updateSql);
                    $stmt->execute([':login' => $login]);

                    // Log the admin login action
                    $admin_id = $_SESSION['admin_id'];  // Admin's ID from session
                    $action = "Admin logged in";  // Action description
                    insertAdminAction($admin_id, $action);  // Log the action

                    $_SESSION['admin'] = $user; // Optional: Store the admin data in session

                    // Redirect admin to the admin dashboard
                    header('Location: page/admin/index.php');
                } else {
                    // Log the user login action in the user_audit_trail
                    $user_id = $user['id'];  // User's ID
                    $action = "User logged in";  // Action description
                    insertUserAction($user_id, $action);  // Log the action for the user

                    // If user is not an admin, redirect to user dashboard
                    header('Location: page/user/index.php');
                }
                exit(); 
            } else {
                echo "<script>
                        alert('Invalid email or password. Please try again.');
                        window.location.href = 'loginpage.php';
                      </script>";
            }
        } else {
            echo '<script>
                    alert("No account exists with this username/email. Please sign up first.");
                    window.location.href = "loginpage.php";
                 </script>';
        }

    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}
?>
