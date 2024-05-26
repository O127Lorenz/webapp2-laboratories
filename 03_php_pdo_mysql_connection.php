<?php

$host = 'localhost'; 
$db_name = 'lorenz'; 
$user = 'root'; 
$password = '012704'; 



$dsn = "mysql:host=$host;dbname=$db_name;charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    if ($pdo) {
        echo "Connected to the $db_name database successfully!";

    
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>