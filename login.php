<?php
require 'include/landing/connect.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // Prepare the SQL query
        $sql = "SELECT * FROM user_registration WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);

        // Fetch the user
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Check if the password matches
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;  
                echo("Login Successful");
                header('Location: page/user/index.php');
                exit();
            } else {
                // Incorrect password
                echo "Invalid email or password!";
            }
        } else {
            echo '<script>
                    alert("No account exists with this email. Please sign up first.");
                    window.location.href = "loginpage.php";
                 </script>';
        }
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
