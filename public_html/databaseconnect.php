<?php
include __DIR__ . '/include/pdoconfig.php';
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    echo "Connected to $dbname at $host successfully ! Youpi !";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
};