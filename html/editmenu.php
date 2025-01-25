<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editmenu</title>
    <link rel="stylesheet" href="css/editmenu.css">
</head>
<body>
    <h1>Add items to the Menu</h1>
    <form action="ProcessMenu.php" method="post">
<!-- ---------------------------------------------------------------------------- -->
<label for="naam">Naam</label>
<input type="text" id="naam" name="naam" required>
<!-- ---------------------------------------------------------------------------- -->
<fieldset>
<legend>Dieet</legend>
<label for="">
<input type="radio" name="dieet" value="Vegan" checked>
Vegan
</label>
<br>
<label for="">
<input type="radio" name="dieet" value="Vegatarisch">
Vegatarisch
</label>
<br>
<label for="">
<input type="radio" name="dieet" value="Vlees">
Vlees
</label>
<br>
<label for="">
<input type="radio" name="dieet" value="Vis">
Vis
</label>
</fieldset>
<!-- ---------------------------------------------------------------------------- -->
<label for="message">Ingredienten</label>
<textarea rows="5" cols="50" id="ingredienten" name="ingredienten" required ></textarea>
<!-- ---------------------------------------------------------------------------- -->
<label for="priority">Soort</label>
<select  id="soort" name="soort">
<option value="Pizza">Pizza</option>
<option value="Broodjes">Broodjes</option>
<option value="Schotels">Schotels</option>
</select>
<!-- ---------------------------------------------------------------------------- -->

<!-- ---------------------------------------------------------------------------- -->
<label for="prijs">Prijs</label>
<input type="double" id="prijs" name="prijs" required >

<input type="submit" value="ADD to Menu">
<!-- ---------------------------------------------------------------------------- -->
    </form>

<div>
<table border="1"  cellpadding="0" >
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

    $select = "SELECT * FROM food";
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
    <td>" . $result['prijs'] . "€" . "</td>
    <td>
    <a href='editmenu.php? id=" . $result['id'] . " ' class= 'btn1'>Delete</a>
    <a href='menuUpdate.php? id=" . $result['id'] . " ' class= 'btn2'>Update</a>

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