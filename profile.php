<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Main </title>
<style>
    
html, body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: large;
    background-color: black;
    color: white;
    text-align: center;
    background: url("parkinglot.jpg");
    background-repeat: no-repeat;
    background-size: cover;   
}
    
a {
    color: inherit;
    text-decoration: none;
}

    
</style>
</head>

<body>
<br>
<h1> Profile </h1>
    
<?php
    $servername = "localhost";
    $username = "young";
    $password = "password";
    $database = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $database);
    
    $username = $_POST["username"] ?? null;
    $password = $_POST["password"] ?? null;
    

    if($_POST["username"] != "" && $_POST["password"] != ""){
        if(isset($_POST["username"]) && isset($_POST["password"])) {
            try {
                $check = $conn->query("SELECT username, password FROM `user` WHERE `username` = '$username' AND `password` = '$password'");
                if(($check->num_rows) > 0) {
                    $_SESSION["loggedin"] = true;
                    $_SESSION["name"] = $username;
                    $_SESSION["pass"] = $password;
    
                    echo "Welcome $username";
                    
                    echo '<p><a href="inventory.php">Buy a parking spot</a></p>'; 
                    echo '<p><a href="main.php">Log out</a></p>';
                    
                } else {
                    echo "Wrong username/password";
                    echo '<p><a href="register.php"> Register </a></p>';
                    echo '<p><a href="login.php"> Try again </a></p>';
                }
            } catch (Exception $e) {
                    echo "Error: ", $e->getMessage();
                }
        } else {
            echo "Please fill out all the fields";
        }
    } else {
        echo "The field(s) are blank";
    }
    
    $conn->close();
    
?>
    




    
</body>
</html>