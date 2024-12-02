<?php
session_start();
if (!isset($_SESSION['user'])) {
    // If the user is not logged in, redirect them to the login page
    header('Location: ../../loginpage.php');
    exit(); // Ensure no further code execution after the redirect
}

require '../../include/landing/connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // Include PHPMailer autoloader

// Function to generate a random reference ID
function generateReferenceId($length = 10)
{
    $characters = '0987654321ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $referenceId = '';

    for ($i = 0; $i < $length; $i++) {
        $referenceId .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $referenceId;
}

// Function to check if the reference ID is unique
function isReferenceIdUnique($pdo, $reference_id) 
{
    try {
        $sql = "SELECT COUNT(*) FROM pwdcard_applications WHERE reference_id = :reference_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':reference_id' => $reference_id]);
        return $stmt->fetchColumn() == 0; // Return true if unique
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ensure user is logged in
        if (!isset($_SESSION['user'])) {
            echo "User not logged in!";
            exit;
        }

        do {
            $reference_id = generateReferenceId();
        } while (!isReferenceIdUnique($pdo, $reference_id));

        // Get user id from session
        $user_id = $_SESSION['user']['id']; // Assuming 'user' session contains the logged-in user's details

        $application_type = $_POST['application_type'];
        $fname = trim($_POST['fname']);
        $mname = trim($_POST['mname']);
        $lname = trim($_POST['lname']);
        $dob = $_POST['dob'];
        $sex = $_POST['sex'];
        $civil_status = $_POST['civil_status'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $disability = $_POST['disability'];
        $cause = $_POST['cause'];

        // File upload handling
        $medicalcert = null;
        $valid_id = null;
        $photo = null;

        if (isset($_FILES['medicalcert']) && $_FILES['medicalcert']['error'] === UPLOAD_ERR_OK) {
            $medicalcert = 'uploads/' . basename($_FILES['medicalcert']['name']);
            move_uploaded_file($_FILES['medicalcert']['tmp_name'], $medicalcert);
        }

        if (isset($_FILES['valid_id']) && $_FILES['valid_id']['error'] === UPLOAD_ERR_OK) {
            $valid_id = 'uploads/' . basename($_FILES['valid_id']['name']);
            move_uploaded_file($_FILES['valid_id']['tmp_name'], $valid_id);
        }

        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $photo = 'uploads/' . basename($_FILES['photo']['name']);
            move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
        }

        // Insert into pwdcard_applications table
        $sql = "INSERT INTO pwdcard_applications(reference_id, application_type, fname, mname, lname, dob, sex, civil_status, address, contact, disability, cause, medicalcert, valid_id, photo, user_id) 
                VALUES(:reference_id, :application_type, :fname, :mname, :lname, :dob, :sex, :civil_status, :address, :contact, :disability, :cause, :medicalcert, :valid_id, :photo, :user_id)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':reference_id' => $reference_id,
            ':application_type' => $application_type,
            ':fname' => $fname,
            ':mname' => $mname,
            ':lname' => $lname,
            ':dob' => $dob,
            ':sex' => $sex,
            ':civil_status' => $civil_status,
            ':address' => $address,
            ':contact' => $contact,
            ':disability' => $disability,
            ':cause' => $cause,
            ':medicalcert' => $medicalcert,
            ':valid_id' => $valid_id,
            ':photo' => $photo,
            ':user_id' => $user_id // Insert the current user ID
        ]);

        // Get the last inserted ID for the guardian
        $pwd_application_id = $pdo->lastInsertId();

        // Insert guardian details
        $guardian_name = trim($_POST['guardian_name']);
        $guardian_relationship = $_POST['guardian_relationship'];
        $guardian_contact = $_POST['guardian_contact'];

        $guardianSql = "INSERT INTO guardians(pwd_application_id, guardian_name, guardian_relationship, guardian_contact)
                        VALUES (:pwd_application_id, :guardian_name, :guardian_relationship, :guardian_contact)";
        $stmt = $pdo->prepare($guardianSql);
        $stmt->execute([
            ':pwd_application_id' => $pwd_application_id,
            ':guardian_name' => $guardian_name,
            ':guardian_relationship' => $guardian_relationship,
            ':guardian_contact' => $guardian_contact
        ]);
        // Send an email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Set your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'jenielynayson@gmail.com'; // Your SMTP username
            $mail->Password = 'pibr zdbg jblr odof'; // Your SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('no-reply@example.com', 'PWD Card Application');
            $mail->addAddress('jenielynayson@gmail.com'); // Your email to receive the notification

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New PWD Card Application Submitted';
            $mail->Body    = "A new PWD card application has been submitted with the following reference ID: <b>$reference_id</b>.<br><br>
                              Applicant's Name: $fname $mname $lname<br>
                              Date of Birth: $dob<br>
                              Guardian: $guardian_name<br>
                              Contact: $contact";

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        $_SESSION['reference_id'] = $reference_id;
        header('Location:' . $_SERVER['PHP_SELF']);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
    <link rel="icon" href="../../img/logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=check_circle" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
      <!-- modal for successful registration -->
      <div class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50" id="successModal">
            <div class="w-2/6 bg-white border border-gray-300 shadow-lg rounded-lg p-4 relative">
                <!-- close icon -->
                <svg class="absolute right-6 top-6 w-3 h-3 cursor-pointer" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="modalClose">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>

                <div class="flex flex-col items-center py-6">
                    <!-- check icons -->
                    <svg class="w-16 h-16 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>


                    <h1 class="text-2xl font-bold mb-2 text-gray-800">Registration Successful!</h1>

                    <span class="text-center">Your application has been submitted successfully.</span>
                    <span class="text-center">We are reviewing your details and will get back to you shortly.</span>
                    <span class="text-lg font-semibold mt-2">Reference ID: <?php
                    if (isset($_SESSION['reference_id'])) {
                        echo $_SESSION['reference_id'];
                    }
                    ?> </span>
                  

                   <div class="mt-2">
                   <button
                            class="py-2 px-6 bg-blue-800 text-white rounded-md shadow-md hover:bg-blue-900 transition duration-300"
                            id="okaybtn">
                            Okay
                        </button>
                   </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function(){
                const modalClose = document.getElementById('modalClose');
                const okaybtn = document.getElementById('okaybtn');

                modalClose.addEventListener('click', function(){
                    window.location.href = '../../index.php';
                });

                okaybtn.addEventListener('click', function(){
                    window.location.href = '../../index.php';
                });
            })
        </script>
</body>
</html>