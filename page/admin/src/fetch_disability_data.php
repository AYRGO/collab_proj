<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'localhost'; 
$db = 'pwd_project'; 
$user = 'root'; 
$pass = ''; 

try {
 
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    $sql = "
    SELECT 
        disability, 
        COUNT(*) AS count
    FROM 
        pwdcard_applications
    WHERE 
        disability IN (
            'Deaf',
            'Intellectual Disability',
            'Learning Disability',
            'Mental Disability',
            'Physical Disability',
            'Visual Disability',
            'Psychosocial Disability',
            'Speech and Language Impairment',
            'Cancer (RA11215)',
            'Rare Disease (RA10747)'
        )
    GROUP BY 
        disability;
    ";

    // Execute the query
    $stmt = $pdo->query($sql);

    // Prepare data for JSON response
    $labels = [];
    $data = [];
    while ($row = $stmt->fetch()) {
        $labels[] = $row['disability'];
        $data[] = $row['count'];
    }

    // Return JSON-encoded data
    echo json_encode(['labels' => $labels, 'data' => $data]);
} catch (PDOException $e) {
    // Handle errors
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}
?>
