
<?php
    $conn = mysqli_connect("localhost", "root", "", "restaurant");

    $s_id    = $_GET['id'];
    $get_sql = "SELECT * FROM food WHERE id=$s_id";
    $query   = mysqli_query($conn, $get_sql);
    $row     = mysqli_fetch_assoc($query);

    if (isset($_POST['Update'])) {
        $naam         = $_POST['naam'];
        $dieet        = $_POST['dieet'];
        $ingredienten = $_POST['ingredienten'];
        $soort        = $_POST['soort'];
        $prijs        = $_POST['prijs'];

        $update = "UPDATE food SET naam='$naam', dieet='$dieet', ingredienten='$ingredienten', soort='$soort', prijs='$prijs' WHERE id=$s_id";
        $query  = mysqli_query($conn, $update);
        if ($query) {
            header('location: editmenu.php');
        } else {
            echo "Error";
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

</head>
<body>

<div class="update-items">
    <h1> Update Item (ID=<?php echo $row['id'] ?>) from the Menu</h1>
    <form action="" method="post">
<!-- ---------------------------------------------------------------------------- -->
<label for="naam"></label>
<h4>Naam van het gerecht : </h4><input type="text" id="naam" name="naam"  value="<?php echo $row['naam'] ?>">
<br>
<!-- ------------------------------------------------------------------------------------------------------ -->
<label for="prijs"></label>
<h4>Prijs</h4>
<input type="double" id="prijs" name="prijs"value="<?php echo "€" . $row['prijs'] ?>" required >
<br>
<legend>Ingredienten</legend>
<label for="Ingredienten"></label>
<textarea rows="5" cols="50" id="ingredienten" name="ingredienten" required >

<?php echo $row['ingredienten'] ?>
</textarea>
<br><br>
<!-- ------------------------------------------------------------------------------------------------ -->
<label for="Soort"> <h4>Soort</h4></label><br>
<select  id="soort" name="soort">
<option value="Pizza">Pizza</option>
<option value="Broodjes">Broodjes</option>
<option value="Schotels">Schotels</option>
</select>
<br><br>
<!-- ----------------------------------------------------------------------------------------------- -->
<label for="Soort"> <h4>Dieet</h4></label><br>
<select  id="soort" name="dieet">
<option value="Vegan">Vegan</option>
<option value="Vegatarisch">Vegetarisch</option>
<option value="Vlees"> Vlees</option>
<option value=" Vis"> Vis</option>
</select>
<br>
<!-- ------------------------------------------------------------------------------------------------------- -->

<input type="submit" name="Update" value="Update">
<!-- ---------------------------------------------------------------------------- -->
    </form>


</div>

<p class="available" >Available Menu's</p>
    <div>
<table border="1"  cellpadding="0" >
<tr>
    <th>ID</th>
    <th>Soort</th>
    <th>Naam</th>
    <th>Ingredienten</th>
    <th>Dieet</th>
    <th>Prijs</th>


    <?php
        $connection = mysqli_connect('localhost', 'root', '', 'restaurant');
        $select     = "SELECT * FROM food order by soort";
        $query      = mysqli_query($connection, $select);

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
    <td>" ."€". $result['prijs'] . "</td>


</tr>";

            }

    }
