<?php
    require_once 'connectDB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twist Food</title>
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

        <form action="search.php" method="POST">
                <input type="search" name="search" placeholder="Vul in wat je wilt zoeken.." required>
                <input type="submit" name="submit" value="Zoeken" class="searchbtn ">
            </form>

        </div>
    </section>
    <!--SEARCH Section Ends Here -->

    <!-- Categories Section Starts Here  -->
    <section class="categories">

        <div class="container2">
            
                <div class="box-3 ">
                <a href="pizza.php"><img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve"> </a>

                    <h3 class="text-black">Pizza</h3>
                </div>
           


                <div class="box-3 ">
                <a href="broodjes.php"><img src="images/doner-kebab-3-1080x960.jpg" alt="Broodje" class="img-responsive img-curve"></a>

                    <h3 class="text-black">Broodjes</h3>
                </div>



                <div class="box-3 ">
                <a href="schotels.php"> <img src="images/ribeye-steak-met-chilisaus-salade-noedels-mais-in-een-schotel-bovenaanzicht-op-donkere-achtergrond_689047-1919.avif" alt="Schotels" class="img-responsive img-curve">
                </a>

                    <h3 class="text-black ">Schotels</h3>
                </div>


        </div>
    </section>
    <!-- Categories Section Ends Here

    <!- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <h2 class="text-center">Food Menu</h2>
        <div class="container3">
            <?php

                $query  = "SELECT * FROM food where soort = 'broodjes'";
                $result = $pdo->query($query);
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='food-menu-box'>";
                    echo "<h4>" . htmlspecialchars($row['naam']) . "</h4>";
                    echo "<h5>Ingredienten : </h5>";
                    echo "<p class='ingredienten'>" . htmlspecialchars($row['ingredienten']) . "</p>";
                    echo "<p class='prijs' >Prijs : " . '€' . htmlspecialchars($row['prijs']);
                    echo "</div>";
                }
            ?>
        </div>
    </section>

    <!-- fOOD MEnu Section Ends Here -->


    <footer>
        <div class="container4">
            <p>All rights reserved. <br>  Made By Sami Benouari</p>
        </div>
    </footer>

</body>
</html>