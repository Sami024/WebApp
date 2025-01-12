<?php
$dsn = 'mysql:host=localhost;dbname=restaurant';
$dbusername = 'user';
$dbpassword = 'password';

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    echo "wa ra mageddamsch ha schi";
}
?>






