<?php
session_start();
require 'include/landing/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = trim($_POST['login']);
    $password = $_POST['password'];

    try {
        // Check if login is email or username
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            // Query for user registration
            $sql = "SELECT * FROM user_registration WHERE email = :login";
        } else {
            // Query for administrator login
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
                $_SESSION['user']['fname'] = $user['fname'];
                $_SESSION['user']['lname'] = $user['lname'];
                $_SESSION['user']['dob'] = $user['dob'];
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

                // Redirect based on user type
                if (isset($user['user_type']) && $user['user_type'] === 'admin') {
                    $_SESSION['admin'] = $user;
                    header('Location: page/admin/index.php');
                } else {
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
