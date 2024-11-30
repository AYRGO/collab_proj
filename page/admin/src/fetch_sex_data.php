<?php
$host = 'localhost'; 
$db = 'pwd_project'; 
$user = 'root'; 
$pass = ''; 

try {
    // Create a PDO connection
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    header('Content-Type: application/json');

    
    $query = "
        SELECT 
            sex, 
            COUNT(*) AS count
        FROM pwdcard_applications
        WHERE sex IN ('Male', 'Female', 'Others')
        GROUP BY sex;
    ";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Initialize dataset for Male, Female, Others
    $data = [
        'Male' => 0,
        'Female' => 0,
        'Others' => 0
    ];

    foreach ($results as $row) {
        $data[$row['sex']] = (int) $row['count'];
    }

   
    echo json_encode([
        'labels' => ['Male', 'Female', 'Others'],
        'data' => array_values($data), // Return the count data directly
        'borderColor' => [
            'rgba(54, 162, 235, 1)', // Blue for Male
            'rgba(255, 105, 180, 1)', // Pink for Female
            'rgba(255, 99, 132, 1)'  // Red for Others
        ],
        'backgroundColor' => [
            'rgba(54, 162, 235, 0.2)', // Blue for Male
            'rgba(255, 105, 180, 0.2)', // Pink for Female
            'rgba(255, 99, 132, 0.2)'  // Red for Others
        ],
        'borderWidth' => 2
    ]);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
