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
                    $message = "Your account has been successfully verified! You will be redirected to the login page.";

                    echo "<script>
                        alert('$message');
                    </script>";
                    
                    // Redirect to login page after 3 seconds
                    header("Refresh: 1; url=loginpage.php"); 
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
<body class="bg-gradient-to-r from-blue-50 to-gray-200 font-sans">

    <div class="max-w-lg mx-auto">
        <div class="flex justify-center items-center h-screen text-gray-800">
            <div class="bg-white p-10 rounded-lg shadow-lg transform transition-all hover:shadow-2xl">
                <div class="w-20 h-20 border-4 border-indigo-600 rounded-full flex items-center justify-center mb-8 mx-auto">
                    <i class="fa-regular fa-envelope text-indigo-700 text-3xl"></i>
                </div>

                <div>
                    <h1 class="font-semibold text-3xl text-center text-gray-800 mb-6">Verify Your Email Address</h1>
                    <p class="text-center text-lg text-gray-600 mb-6">To complete your registration, please verify your email address by clicking the link we sent to your inbox.</p>

                    <a href="https://gmail.com/" class="block text-center">
                        <button class="bg-indigo-600 text-white px-6 py-3 rounded-md text-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 transition duration-300 transform hover:scale-105">
                            Verify Email Address
                        </button>
                    </a>
                    <hr class="my-6 border-gray-300">

                    <p class="text-center text-sm text-gray-500">
                        If you did not create an account, please ignore this email.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
