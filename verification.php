<?php
session_start();
require 'include/landing/connect.php'; // Make sure to include your DB connection

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    try {
        // Query the database for the user with the provided token
        $sql = "SELECT id, verify FROM user_registration WHERE token = :token";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':token' => $token]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if ($user['verify'] == 1) {
                // If the user is already verified
                echo "Your account is already verified.";
            } else {
                // Update the user's verification status
                $updateSql = "UPDATE user_registration 
                              SET verify = 1, token = NULL 
                              WHERE id = :id";
                $updateStmt = $pdo->prepare($updateSql);

                if ($updateStmt->execute([':id' => $user['id']])) {
                    // Inform the user of successful verification
                    echo "Your account has been successfully verified! You will be redirected to the login page.";
                    
                    // Redirect to login page after 3 seconds
                    header("Refresh: 3; url=loginpage.php"); 
                    exit; // Make sure no further code is executed after redirection
                } else {
                    // Error in the update query
                    echo "There was an issue updating your account. Please try again.";
                }
            }
        } else {
            // If the token is invalid or expired
            echo "Invalid or expired verification link.";
        }
    } catch (PDOException $e) {
        // Catch any PDO exceptions and display the error message
        echo "There was an error verifying your account: " . $e->getMessage();
    }
}
?>


<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    
    <div class="max-w-2xl mx-auto">
        <div class="flex justify-center items-center h-screen text-gray-700">
            <div class="bg-white p-10 rounded-lg shadow-lg flex flex-col items-center justify-center text-center">
                <div class="w-20 h-20 border-2 border-blue-800 rounded-full flex items-center justify-center mb-8">
                <i class="fa-regular fa-envelope text-blue-900 text-3xl"></i>
                </div>

                <div>
                    <h1 class="font-semibold text-2xl capitalize text-gray-800 mb-4">Verify your email address</h1>
                    <hr class="w-3/4 border-t border-gray-300 mx-auto py-4">

                    <p class="mb-4">In order to complete your registration, please verify your email address by clicking the link we sent to your email.</p>

                    <a href="https://gmail.com/">
                        <button class="bg-blue-800 text-white px-4 py-2 rounded-md hover:bg-blue-900">Verify Email Address</button>
                    </a>
                    <hr>

                    <p>
                        If you did not create an account, please ignore this email.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>