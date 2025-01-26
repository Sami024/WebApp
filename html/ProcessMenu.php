<?php

require 'connectDB.php';

$naam = $_POST['naam'];
$dieet = $_POST['dieet'];
$ingredienten = $_POST['ingredienten'];
$soort = $_POST['soort'];
$prijs = $_POST['prijs'];

if (empty($naam) || empty($dieet) || empty($ingredienten) || empty($soort) || empty($prijs)) {
    die('Please fill all the fields.');
    
}

if (!is_numeric($prijs)) {
    die('Price must be a number.');
}











$host='localhost';
$dbname='restaurant';
$username='root';
$password='';

$conn=mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die('Could not connect: ' . mysqli_connect_error());
}


$sql = "INSERT INTO food (soort, naam,ingredienten,dieet,prijs)
 VALUES (?,?,?,?,?)";
 $stmt=mysqli_stmt_init($conn);

if(! mysqli_stmt_prepare($stmt, $sql)) {
    die( mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, 'ssssd', $soort, $naam, $ingredienten, $dieet, $prijs);
mysqli_stmt_execute($stmt);
echo 'Message sent';
header("Location: editmenu.php");

