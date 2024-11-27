<?php
    $localhost = 'localhost';
    $dbname = 'pwd_project';
    $charset = 'utf8';
    $username = 'root';
    $password = '';

    try {
        $dns = "mysql:host=$localhost;dbname=$dbname;charset=$charset";
        $pdo = new PDO ($dns, $username, $password);

        $stmt = $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
?>