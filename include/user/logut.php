<?php
session_start(); // Start the session
require '../../include/landing/connect.php'; // Ensure you have a valid connection to your database

try {
    // Check if it's an admin or a regular user logging out
    if (isset($_SESSION['admin_id'])) {
        // Admin is logging out
        $admin_id = $_SESSION['admin_id'];

        // Log the action in the admin audit trail
        $action = "Admin logged out";
        $sql = "INSERT INTO admin_audit_trail (action, admin_id) VALUES (:action, :admin_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['action' => $action, 'admin_id' => $admin_id]);

        // Unset admin session
        unset($_SESSION['admin_id']);
    } elseif (isset($_SESSION['user'])) {
        // Regular user is logging out
        $user_id = $_SESSION['user']['id'];

        // Log the action in the user audit trail (you can use the same table for both if needed)
        $action = "User logged out";
        $sql = "INSERT INTO user_audit_trail (action, user_id) VALUES (:action, :user_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['action' => $action, 'user_id' => $user_id]);

        // Unset user session
        unset($_SESSION['user']);
    } else {
        // If neither admin nor user is logged in
        echo "No user or admin is logged in.";
        exit();
    }

    // Destroy the session
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session

    // Redirect to the login page
    header('Location: ../../loginpage.php');
    exit(); // Ensure no further code is executed
} catch (PDOException $e) {
    echo "There was an error logging out: " . $e->getMessage();
    exit(); // Stop further code execution in case of error
}
?>
