<?php
$dsn = 'mysql:host=localhost;dbname=restaurant';
$dbusername = 'root';
$dbpassword = 'rootpassword';

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>






