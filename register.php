<?php
    require 'include/landing/connect.php';

    try {
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $fname = trim($_POST['fname']);
            $lname = trim($_POST['lname']);
            $email = trim($_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $contact = trim($_POST['contact']);
            $dob = $_POST['dob'];
            $usertype = $_POST['usertype'];

            // Debugging: Check if usertype is received
            if (empty($usertype)) {
                echo "Usertype is not set!";
                return;
            }

            $checkemail = "SELECT COUNT(*) FROM user_registration WHERE email = :email";
            $checkStmt = $pdo->prepare($checkemail);
            $checkStmt->execute([':email' => $email]);

            if ($checkStmt->fetchColumn() > 0) {
                echo "Email already exists!";
                return;
            }

            $sql = "INSERT INTO user_registration (fname, lname, email, password, contact, dob, usertype, created_at, last_login) 
                    VALUES (:fname, :lname, :email, :password, :contact, :dob, :usertype, NOW(), NULL)";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':fname' => $fname,
                ':lname' => $lname,
                ':email' => $email,
                ':password' => $password,
                ':contact' => $contact,
                ':dob' => $dob,
                ':usertype' => $usertype
            ]);

            // Debugging: Check if the insertion was successful
            if ($stmt->rowCount() > 0) {
                echo "User registered successfully!";
            } else {
                echo "Failed to register user!";
            }

            header('Location: page/user/index.php');
        }    
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
?>