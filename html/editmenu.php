<?php

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
        } else {
            $prijs = test_input($_POST["prijs"]);
        }

        if (empty($_POST["ingredienten"])) {
            $ingredientenErr = "Veld is niet ingevuld";
        } else {
            $ingredienten = test_input($_POST["ingredienten"]);
        }

    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editmenu</title>
    <link rel="stylesheet" href="css/editmenu.css">

<style>

    span{
        color:red;
    }
</style>


</head>
<body>

    <div class="add-items">
     <h1>Add items to the Menu</h1>
    <form action="ProcessMenu.php" method="post">

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
<option value=" Vis"> Visis</option>
</select>
<br>
<!-- ------------------------------------------------------------------------------------------------------- -->
<input type="submit" value="Add to Menu">
<!-- ---------------------------------------------------------------------------- -->
    </form>
    </div>
    <p class="available" >Available Menu's</p>

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

</div>

</body>
</html>