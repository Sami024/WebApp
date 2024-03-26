<?php
$host = '172.18.0.2';
$user = 'admin';
$pass = 'admin';
$db = 'gerechten';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo " Connected successfully";
}
catch (PDOException $e)
{
echo $e->getMessage();
die(" Sorry Database is not connected. Please try again later.");
}

{

    $sql = "SELECT * FROM gerechten";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r($result);
}

{
    $sql = "SELECT * FROM gerechten WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => 1]);
    $result = $stmt->fetch();
    print_r($result);
}

{
    $sql = "INSERT INTO gerechten (gerecht, ingredienten) VALUES (:gerecht, :ingredienten)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['gerecht' => 'Pasta', 'ingredienten' => 'Pasta, saus']);
    echo "Row inserted";
}

{
    $sql = "UPDATE gerechten SET gerecht = :gerecht WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['gerecht' => 'Pizza', 'id' => 1]);
    echo "Row updated";
}

{
    $sql = "DELETE FROM gerechten WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => 1]);
    echo "Row deleted";
}

