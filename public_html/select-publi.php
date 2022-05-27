<?php
include __DIR__ . '/include/pdoconfig.php';
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$sql = 'SELECT `publititle` FROM `publi`';
$result = $pdo->query($sql);
while ($row = $result->fetch())
{
$publis[] = $row['publititle'];
}}

catch (PDOException $e)
{
    $error = 'Unable to connect to the server : ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();}?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Publis</title>
  </head>
  <body>
  <?php if (isset($error)): ?>
  <p>
    <?php echo $error; ?>
  </p>
  <?php else: ?>
  <?php foreach ($publis as $publititle): ?>
  <blockquote>
    <p>
    <?php echo htmlspecialchars($publititle, ENT_QUOTES, 'UTF-8') ?>
    </p>
  </blockquote>
  <?php endforeach; ?>
  <?php endif; ?>
  </body>
</html> 