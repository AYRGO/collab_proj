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
$admin_id = 1;

try {
    // Query to get unread notifications and related pwdcard application details
    $sql = "SELECT f.fname, f.mname, f.lname, f.disability, f.submitted_at
            FROM admin_notif an
            JOIN pwdcard_applications f ON an.pwd_application_id = f.id
            WHERE an.admin_id = :admin_id AND an.read_status = 0";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['admin_id' => $admin_id]);

    $notifications = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return unread count and notifications
    $response = [
        'unread_count' => count($notifications),
        'notifications' => $notifications
    ];

    echo json_encode($response);

} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

$pdo = null;
?>
