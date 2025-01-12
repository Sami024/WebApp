<?php
require_once 'connectDB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->

    <div class="container">
        <div class="logo">

            <img src="images/1598562279236_Twist-Food_Logo-1.png"
                alt="Restaurant Logo" class="img-responsive">
        </div>

        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="foods.html">Foods</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container1">

            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- Categories Section Starts Here  -->
    <section class="categories">

              <div class="container2">
            <a href="category-foods.html">
                <div class="box-3 ">
                    <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                    <h3 class="text-black">Pizza</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 ">
                    <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                    <h3 class="text-black">Broodjes</h3>
                </div>
            </a>

            <a href="#">
                <div class="box-3 ">
                    <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                    <h3 class="text-black ">Schotels</h3>
                </div>
            </a>

        </div>
    </section>
    <!-- Categories Section Ends Here

    <!- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <h2 class="text-center">Food Menu</h2>
        <div class="container3">
<?php

$query = "SELECT * FROM food";
$result = $pdo->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='food-menu-box'>";
    echo "<h4>" . htmlspecialchars($row['naam']) . "</h4>";
    echo "<h5>Ingredienten : </h5>";
    echo "<p>" . htmlspecialchars($row['ingredienten']) . "</p>";
    echo "</div>";
}
?>
</div>
</section>

<!-- fOOD MEnu Section Ends Here -->
    <!-- social Section Starts Here -->

    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
   <footer>
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Sami Benouari</a></p>
        </div>
        </footer>

    <!-- footer Section Ends Here -->

</body>

</html>