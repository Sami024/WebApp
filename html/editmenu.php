<?php
    session_start();
    $naamErr = $ingredientenErr = $prijsErr = "";
    $naam    = $ingredienten    = $prijs    = "";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["naam"])) {
            $naamErr = "Naam is niet ingevuld";
        } else {
            $naam = test_input($_POST["naam"]);
        }

        if (empty($_POST["prijs"])) {
            $prijsErr = "Prijs is niet ingevuld";

        } elseif (! is_numeric($_POST["prijs"])) {
            $prijsErr = "Alleen cijfers zijn toegestaan";
        } else {
            $prijs = test_input($_POST["prijs"]);
        }

        if (empty($_POST["ingredienten"])) {
            $ingredientenErr = "Veld is niet ingevuld";
        } else {
            $ingredienten = test_input($_POST["ingredienten"]);
        }

    }
    if (($_SERVER["REQUEST_METHOD"] == "POST") && ($_POST['naam'] != "") && ($_POST['ingredienten'] != "") && ($_POST['prijs'] != "")) {

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
            header("Location: editmenu.php");
        } catch (PDOException $e) {
            echo "Error: Something went wrong " . $e->getMessage();
        }

        echo "Error: no data inserted";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editmenu</title>
    <link rel="stylesheet" href="css/editmenu.css">
    </head>
    <body>
    <div class="container1">
        <div class="logo">

            <img src="images/1598562279236_Twist-Food_Logo-1.png"
                alt="Restaurant Logo" class="logo">
        </div>

        <ul>
             <li>
                <a href="logout.php">Logout
                </a>
            </li>
        </ul>
    </div>
<h3>Welkom je bent ingelogd als                                <?php echo $_SESSION["username"] ?></h3>
    <div class="add-items">
     <h1>Voeg items toe in Menu</h1>
    <form action="editmenu.php" method="post">

<!-- ------------------------------------------------------------------------------------------------------------------------ -->

<!-- ---------------------------------------------------------------------------- -->
<label for="naam"></label>
<input type="text" id="naam" name="naam" placeholder="Naam van het gerecht"> <span><?php echo $naamErr ?></span>
<br>
<!-- ---------------------------------------------------------------------------- -->
<label for="prijs"></label>
<input type="double" id="prijs" name="prijs"  placeholder="Prijs"  > <span><?php echo $prijsErr ?></span>
<br>
<!-- -------------------------------------------------------------------------- -->
<label for="Ingredienten"></label>
<textarea rows="5" cols="50" id="ingredienten" name="ingredienten" placeholder="Ingredienten"></textarea> <span><?php echo $ingredientenErr ?></span>
<br>

<!-- ------------------------------------------------------------------------------------------ -->


<label for="Soort">Soort</label><br>
<select  id="soort" name="soort">
<option value="Pizza">Pizza</option>
<option value="Broodjes">Broodjes</option>
<option value="Schotels">Schotels</option>
</select>
<br>
<!-- ----------------------------------------------------------------------------------------------- -->
<label for="Soort">Dieet</label><br>
<select  id="soort" name="dieet">
<option value="Vegan">Vegan</option>
<option value="Vegatarisch">Vegetarisch</option>
<option value="Vlees"> Vlees</option>
<option value=" Vis"> Vis</option>
</select>
<br>
<!-- ------------------------------------------------------------------------------------------------------- -->
<input type="submit" name="submit" value="Add to Menu">
<!-- ---------------------------------------------------------------------------- -->
    </form>
    </div>
    <p class="available" >Beschikbare Menu items</p>

<div>
<table>
<tr>
    <th class="id" >ID</th>
    <th class="soort" >Soort</th>
    <th class="naam" >Naam</th>
    <th class="ingredienten">Ingredienten</th>
    <th class="dieet" >Dieet</th>
    <th class="prijs" >Prijs</th>
    <th class="operation">Operation</th>
</tr>
<?php

    $connection = mysqli_connect('localhost', 'root', '', 'restaurant');
    if (isset($_GET['id'])) {
        $id     = $_GET['id'];
        $delete = "DELETE FROM food WHERE id = $id";
        $query  = mysqli_query($connection, $delete);

    }

    $select = "SELECT * FROM food order by soort";
    $query  = mysqli_query($connection, $select);

    $num = mysqli_num_rows($query);
    if ($num > 0) {
        while ($result = mysqli_fetch_assoc($query)) {
            echo "
        <tr>
    <td>" . $result['id'] . "</td>
    <td>" . $result['soort'] . "</td>
    <td>" . $result['naam'] . "</td>
    <td>" . $result['ingredienten'] . "</td>
    <td>" . $result['dieet'] . "</td>
    <td>" . "€" . $result['prijs'] . "</td>
    <td>
    <a href='editmenu.php? id=" . $result['id'] . " ' class= 'btn1'>  <button class='delete'>Delete</button></a>
    <a href='menuUpdate.php? id=" . $result['id'] . " ' class= 'btn2'><button class='update'>Update</button></a> </td>

</tr>";

        }

    }

?>

    </table>
</body>
</html>

