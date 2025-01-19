
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}
fieldset {
  background-color: #eeeeee;
  width: 30%;
}
table{

background-color: blanchedalmond;
border: 2px solid black;

}
th,td{

border: 2px solid black;
border-radius: 10px;
}
input[type="submit"]{

    background-color: green;
}

    </style>
</head>
<body>
    <h1> Update Item (ID=                          <?php echo $row['id'] ?>) from the Menu</h1>
    <form action="" method="post">
<!-- ---------------------------------------------------------------------------- -->
<label for="naam">Naam</label>
<input type="text" id="naam" name="naam" value="<?php echo $row['naam'] ?>" >
<!-- ---------------------------------------------------------------------------- -->
<fieldset>
<legend>Dieet</legend>
<label for="" >
  <h5>Vorige selectie :                        <?php echo $row['dieet'] ?></h5>
<input type="radio" name="dieet" value="Vegan">
Vegan
</label><br><label for=""><input type="radio" name="dieet" value="Vegatarisch">Vegatarisch</label>
<br><label><input type="radio" name="dieet" value="Vlees">Vlees</label><br>
<label for=""><input type="radio" name="dieet" value="Vis">Vis</label>
</fieldset row=3 column=4>
<!-- ---------------------------------------------------------------------------- -->
<label for="message">Ingedienten</label>
<textarea id="ingredienten" name="ingredienten"><?php echo $row['ingredienten'] ?></textarea>
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
<input type="double" id="prijs" name="prijs"  value="<?php echo $row['prijs'] ?>">

<input type="submit" name="Update" value="Update">
<!-- ---------------------------------------------------------------------------- -->
    </form>

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
    <td>" . $result['prijs'] . "</td>


</tr>";

            }

    }
