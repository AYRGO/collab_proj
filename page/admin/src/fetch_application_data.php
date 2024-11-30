<?php
$host = 'localhost'; 
$db = 'pwd_project'; 
$user = 'root'; 
$pass = ''; 

header('Content-Type: application/json');

try {
    // Create a PDO connection
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // Query to fetch data grouped by year and application type
    $query = "
        SELECT 
            YEAR(submitted_at) AS year,
            application_type,
            COUNT(*) AS count
        FROM pwdcard_applications
        WHERE application_type IN ('New', 'Renewal', 'Lost ID')
        GROUP BY YEAR(submitted_at), application_type
        ORDER BY year ASC;
    ";
    
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll();

    // Format data for the chart
    $years = [];
    $data = [
        'New' => [],
        'Renewal' => [],
        'Lost ID' => []
    ];

    foreach ($results as $row) {
        $year = $row['year'];
        $type = $row['application_type'];
        $count = (int) $row['count'];

        if (!in_array($year, $years)) {
            $years[] = $year;
        }

        $data[$type][$year] = $count;
    }

    // Ensure all years have data points for all application types
    foreach ($data as $type => $counts) {
        foreach ($years as $year) {
            if (!isset($counts[$year])) {
                $data[$type][$year] = 0;
            }
        }
        ksort($data[$type]); // Sort by year
        $data[$type] = array_values($data[$type]); // Ensure numerical keys
    }

    // Prepare JSON response
    echo json_encode([
        'labels' => $years,
        'datasets' => [
            [
                'label' => 'New',
                'data' => $data['New'],
                'borderColor' => 'rgba(75, 192, 192, 1)',
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'borderWidth' => 2
            ],
            [
                'label' => 'Renewal',
                'data' => $data['Renewal'],
                'borderColor' => 'rgba(54, 162, 235, 1)',
                'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                'borderWidth' => 2
            ],
            [
                'label' => 'Lost ID',
                'data' => $data['Lost ID'],
                'borderColor' => 'rgba(255, 99, 132, 1)',
                'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                'borderWidth' => 2
            ]
        ]
    ]);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
