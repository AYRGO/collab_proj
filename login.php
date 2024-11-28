<?php
session_start();
require 'include/landing/connect.php';

session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = trim($_POST['login']); 
    $password = $_POST['password']; 

    try {
       
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
          
            $sql = "SELECT * FROM user_registration WHERE email = :login";
        } else {
          
            $sql = "SELECT * FROM administrator WHERE username = :login"; 
        }

     
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':login' => $login]); 


        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
           
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;  

              
                if (isset($user['user_type']) && $user['user_type'] === 'admin') {
                    header('Location: page/admin/index.php');
                } else {
                    header('Location: page/user/index.php');
                }
                exit(); 
            } else {
                
                echo "Invalid email or password!";
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
