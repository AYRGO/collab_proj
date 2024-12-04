<?php
session_start();
require 'include/landing/connect.php';
require 'vendor/autoload.php'; // Include PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $contact = trim($_POST['contact']);
        $dob = $_POST['dob'];
        $usertype = $_POST['usertype'];
        $token = bin2hex(random_bytes(50));

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

        $sql = "INSERT INTO user_registration (fname, lname, email, password, contact, dob, usertype, token, created_at, last_login) 
                VALUES (:fname, :lname, :email, :password, :contact, :dob, :usertype, :token, NOW(), NULL)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':fname' => $fname,
            ':lname' => $lname,
            ':email' => $email,
            ':password' => $password,
            ':contact' => $contact,
            ':dob' => $dob,
            ':usertype' => $usertype,
            ':token' => $token
        ]);

        // Debugging: Check if the insertion was successful
        if ($stmt->rowCount() > 0) {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
                $mail->SMTPAuth = true;
                $mail->Username = 'jenielynayson@gmail.com'; // SMTP username
                $mail->Password = 'pibr zdbg jblr odof'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('no-reply@pwd-project.com', 'PWD Project');
                $mail->addAddress($email, $fname);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Email Verification';
                $mail->Body    = "
                Dear $fname, <br><br>
                We are pleased to inform you that your account registration is nearly complete. In order to finalize the process, please verify your email address by clicking the link below: <br><br>
                <a href='http://localhost/pwd/verification.php?email=$email&token=$token' style='color: #1a73e8; text-decoration: none;'>Verify Your Email Address</a><br><br>
                If you did not create an account with us, please disregard this email.<br><br>
                Best regards, <br>
                The PWD Project Team
            ";
            

                $mail->send();
                $_SESSION['message'] = "Registration successful! Please verify your email address.";
                header('Location: verification.php');
            } catch (Exception $e) {
                echo "Failed to send verification email. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Failed to register user!";
        }
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>