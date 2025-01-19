<?php
    session_start();
    $dsn        = 'mysql:host=localhost;dbname=restaurant';
    $dbusername = 'root';
    $dbpassword = '';

    try {
        $connect = new PDO($dsn, $dbusername, $dbpassword);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (isset($_POST["login"])) {

            if (empty($_POST['username']) || empty($_POST['password'])) {
                echo '<center><h3 style="color:black">Please fill all fields</h3></center>';
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
                        header("Location: index.php");
                    }

                } else {
                    echo '<center><h3 style="color:blue">Wrong login Data</h3></center>';
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
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">  -->
<style>

body{
    background-color:grey;
}
.container {

    width: 350px;
    height: 300px;
    border: 10px black solid;
    border-radius: 20px;
    margin: 10px auto 0 auto;
    padding-top: 150px;
    font-size: 20px;
    background-color: white;
    text-align: center;
}
form input{
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
    text-align: center;
    background-color: #f2f2f2;
    height: 50px;
}
h2{
    padding-top: 100px;
    text-align: center;
}
input[type="submit"]{
    background-color: green;
    color: white;
    font-size: 20px;
    border-radius: 10px;
    width: 30%;
}
</style>
</head>
<body>
<h2>Login Admin & User</h2>
    <div class="container">

    <form method="post" action="">
      <input type="text" name="username" placeholder="Enter username" ><br>
      <input type="password" name="password" class="form-control" placeholder="Enter password" ><br>
        <input type="submit" name="login" value="Login">
    </form>

    </div>
</body>
</html>
