<?php
    session_start();
    require '../../include/landing/connect.php';
    if (!isset($_SESSION['user'])) {
        // If the user is not logged in, redirect them to the login page
        header('Location: ../../loginpage.php');
        exit(); // Ensure no further code execution after the redirect
    }

    try{
        // for the user
        $sql = "DELETE FROM user_registration WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $_GET['id']]);
        header('Location: table.php');

        // for the feedback
        $sql = "DELETE FROM user_feedback WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $_GET['id']]);
        header('Location: table.php');
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>