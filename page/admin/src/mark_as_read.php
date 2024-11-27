<?php
// Database connection
$dsn = 'mysql:host=localhost;dbname=pwd_project';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Replace with the actual logged-in admin's ID
$admin_id = 1;  // Change to the logged-in admin's ID

try {
    // Update read status of notifications
    $sql = "UPDATE admin_notif
            SET read_status = 1
            WHERE admin_id = :admin_id AND read_status = 0";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['admin_id' => $admin_id]);

    // Return success response
    echo json_encode(['status' => 'success']);

} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

$pdo = null;
?>
