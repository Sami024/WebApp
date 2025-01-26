<?php
require_once 'connectDB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twist Food</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="logo">

            <img src="images/1598562279236_Twist-Food_Logo-1.png"
                alt="Restaurant Logo" class="logo">
        </div>

        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
           
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <li>
                <a href="inlog.php">Login</a>
            </li>
        </ul>
    </div>
    
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container1">

            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- Categories Section Starts Here  -->
    <section class="categories">

        <div class="container2">
            <a href="pizza.php">
                <div class="box-3 ">
                    <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                    <h3 class="text-black">Pizza</h3>
                </div>
            </a>

            <a href="broodjes.php">
                <div class="box-3 ">
                    <img src="images/doner-kebab-3-1080x960.jpg" alt="Broodje" class="img-responsive img-curve">

                    <h3 class="text-black">Broodjes</h3>
                </div>
            </a>

            <a href="schotels.php">
                <div class="box-3 ">
                    <img src="images/ribeye-steak-met-chilisaus-salade-noedels-mais-in-een-schotel-bovenaanzicht-op-donkere-achtergrond_689047-1919.avif" alt="Schotels" class="img-responsive img-curve">

                    <h3 class="text-black ">Schotels</h3>
                </div>
            </a>

        </div>
    </section>

    <!-- Categories Section Ends Here -->

    <div class="spacing"></div>

    <!-- fOOD MEnu Section Starts Here -->
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
                echo "<p class='ingredienten'>" . htmlspecialchars($row['ingredienten']) . "</p>";
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
        <div class="container4">
            <p>All rights reserved. <br>  Made By Sami Benouari</p>
        </div>
    </footer>
    <!-- footer Section Ends Here -->
</body>
</html>