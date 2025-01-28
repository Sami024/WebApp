<?php



 if (($_SERVER["REQUEST_METHOD"] == "POST")&& ($_POST['naam'] != "") &&($_POST['ingredienten'] != "") && ($_POST['prijs'] != "")) {


    $naam         = $_POST['naam'];
    $dieet        = $_POST['dieet'];
    $ingredienten = $_POST['ingredienten'];
    $soort        = $_POST['soort'];
    $prijs        = $_POST['prijs'];



$host     = 'localhost';
$dbname   = 'restaurant';
$username = 'root';
$password = '';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO food (soort, naam,ingredienten,dieet,prijs) VALUES (:soort, :naam, :ingredienten, :dieet, :prijs)");
    $stmt->bindParam(':soort', $soort);
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':ingredienten', $ingredienten);
    $stmt->bindParam(':dieet', $dieet);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->execute();
    echo "New records created successfully";
    header("Location: editmenu.php");
  } catch(PDOException $e) {
    echo "Error: Something went wrong " . $e->getMessage();
  }
  
    echo "Error: no data inserted";
}
