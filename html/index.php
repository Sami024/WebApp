<?php
$dsn = 'mysql:host=localhost;dbname=restaurant';
$dbusername = 'root';
$dbpassword = 'rootpassword';

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
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

            <img src="../web-design-course-restaurant-master/images/1598562279236_Twist-Food_Logo-1.png"
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

        <h2 class="text-center">Explore Foods</h2>
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
        <div class="container">
<?php

 $query = "SELECT * FROM food";
 $result = $pdo->query($query);
 while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
     echo "<div class='pizza'>";
     echo "<h4>" . htmlspecialchars($row['naam']) . "</h4>";
     echo "<h5>Ingredienten : </h5>";
     echo "<p>" . htmlspecialchars($row['ingredienten']) . "</p>";
     echo "</div>";
 }
?>
</div>
</section>


                <!-- <div class="food-menu-box">
                   <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box"> -->
                <!-- <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Smoky Burger</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Nice Burger</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-momo.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Steam Momo</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section> -->
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" /></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Sami Benouari</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>

</html>