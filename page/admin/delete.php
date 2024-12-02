<?php
session_start();
require '../../include/landing/connect.php';

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // If the user is not logged in, redirect them to the login page
    header('Location: ../../loginpage.php');
    exit(); // Ensure no further code execution after the redirect
}

try {
    // Check if 'id' and 'type' parameters are set to decide whether we are deleting a user or feedback
    if (isset($_GET['id'], $_GET['type'])) {
        $id = $_GET['id'];
        $type = $_GET['type'];

        // Check if the admin ID is available in the session
        if (isset($_SESSION['admin_id'])) {
            $admin_id = $_SESSION['admin_id']; // Use admin_id from session
        } else {
            echo "Admin ID is not set in the session.";
            exit;  // Stop the execution if the admin ID is not found
        }

        if ($type == 'user') {
            // Delete the user from user_registration table
            $sql = "DELETE FROM user_registration WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);

            // Log the action in the audit trail
            $action = "Deleted user with ID: $id";
            $sql = "INSERT INTO admin_audit_trail (action, admin_id) VALUES (:action, :admin_id)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['action' => $action, 'admin_id' => $admin_id]);

            // Redirect back to the user management page
            header('Location: table.php');
            exit(); // Ensure no further code execution after redirect

        } elseif ($type == 'feedback') {
            // Delete the feedback from user_feedback table
            $sql = "DELETE FROM user_feedback WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);

            // Log the action in the audit trail
            $action = "Deleted feedback with ID: $id";
            $sql = "INSERT INTO admin_audit_trail (action, admin_id) VALUES (:action, :admin_id)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['action' => $action, 'admin_id' => $admin_id]);

            // Redirect back to the feedback management page
            header('Location: table.php');
            exit(); // Ensure no further code execution after redirect
        } else {
            echo "Invalid type parameter.";
        }
    } else {
        echo "Invalid request. Missing parameters.";
    }
} catch (PDOException $e) {
    echo "There is some problem in connection: " . $e->getMessage();
}
?>
