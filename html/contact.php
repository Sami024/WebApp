<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TwistFood</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
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

    <!-- Contact Section Starts Here -->


    <section class="contact">
        <div class="container">
            <h2>Contacteer Ons</h2>
            <form action="verwerk_contact.php" method="POST">
                <div class="form-group">
                    <label for="naam">Naam:</label>
                    <input type="text" id="naam" name="naam" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="bericht">Bericht:</label>
                    <textarea id="bericht" name="bericht" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Verstuur</button>
                </div>
            </form>
        </div>
    </section>
        <!-- Contact Section Ends Here -->
        <footer>
        <div class="container4">
            <p>All rights reserved. <br>  Made By Sami Benouari</p>
        </div>
    </footer>
    </section>
    <!-- footer Section Ends Here -->

</body>

</html>