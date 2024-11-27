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
    // Mark all notifications as read
    $updateSql = "UPDATE admin_notif
                  SET read_status = 1
                  WHERE admin_id = :admin_id AND read_status = 0";
    $stmt = $pdo->prepare($updateSql);
    $stmt->execute(['admin_id' => $admin_id]);

    // Fetch the most recent 5 notifications for display
    $selectSql = "SELECT f.fname, f.mname, f.lname, f.disability, f.submitted_at
                  FROM admin_notif an
                  JOIN pwdcard_applications f ON an.pwd_application_id = f.id
                  WHERE an.admin_id = :admin_id
                  ORDER BY f.submitted_at DESC
                  LIMIT 5";
    $stmt = $pdo->prepare($selectSql);
    $stmt->execute(['admin_id' => $admin_id]);

    $notifications = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return success response with the notifications
    $response = [
        'status' => 'success',
        'notifications' => $notifications
    ];
    echo json_encode($response);

} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

$pdo = null;
?>
