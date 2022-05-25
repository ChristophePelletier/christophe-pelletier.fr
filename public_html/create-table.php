<?php
include __DIR__ . '/include/pdoconfig.php';
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$sql = 'CREATE TABLE publitest2 (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
posttitle TEXT,
postdate DATE NOT NULL)
DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
$pdo->exec($sql);
$output = 'Post table created succesfully';
}
catch (PDOException $e)
{
    $output = 'Database error: ' .$e->getMessage() . 'in' . $e->getFile() . ':' .$e->getLine();
}