<?php
    session_start();
    $dsn        = 'mysql:host=localhost;dbname=restaurant';
    $dbusername = 'root';
    $dbpassword = '';
    $inlogError = "";

    try {
        $connect = new PDO($dsn, $dbusername, $dbpassword);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (isset($_POST["login"])) {

            if (empty($_POST['username']) || empty($_POST['password'])) {
                $inlogError = "Username or Password is Empty";
            } else {

                $query     = "SELECT * FROM adminlog WHERE username=? AND password = ?";
                $statement = $connect->prepare($query);
                $statement->execute([$_POST["username"], $_POST["password"]]);
                $count = $statement->rowCount();
                if ($count > 0) {
                    if ($_POST["username"] == "admin") {
                        $_SESSION["username"] = $_POST["username"];
                        header("Location: editmenu.php");

                    } elseif ($_POST["username"] == "user") {
                        $_SESSION["username"] = $_POST["username"];
                        header("Location: user.php");
                    }

                } else {
                    $inlogError = "Username or Password is Wrong ";
                }
            }
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        echo "<br>";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/inlog.css">
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
        </ul>
    </div>



<h2>Login Admin & User</h2>

    <div class="container1">

    <form method="post" action="">
      <input type="text" name="username" placeholder="Enter username" ><br>
      <input type="password" name="password" class="form-control" placeholder="Enter password" ><br>
        <input type="submit" name="login" value="Login">
    </form>

    </div>
    <h3 style="color:brown;" ><?php echo $inlogError ?></h3>

    <footer>
        <div class="container4">
            <p>All rights reserved. <br>  Made By Sami Benouari</p>
        </div>
    </footer>

</body>
</html>
