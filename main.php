<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Main </title>
<style>
    body {
        background: url("parkinglot.jpg");
        background-repeat: no-repeat;
        background-size: cover;     
    }
    
    h1 {
        color: antiquewhite;
        text-align: center;
    }
    
    h2 {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        border: 4px solid black;
        width: 8em
    }
    
    a {
        color: inherit;
        text-decoration: none;
    }
    
</style>
</head>

<body>
<br>
<h1> Welcome to the Parking Manager </h1>
 
<br><br><br><br><br><br><br><br><br><br><br>

<h2><a href="login.php">Login</a></h2>

<h2><a href="register.php">Register</a></h2>

    
<?php
    $_SESSION["loggedin"] = false;
    $_SESSION["name"] = null;
    $_SESSION["pass"] = null;
    $_SESSION["cart"] = null; 
    
    
    
    $servername = "localhost";
    $username = "young";
    $password = "password";
    $database = "mydatabase";

    $conn = new mysqli($servername, $username, $password);
    $db = "CREATE DATABASE IF NOT EXISTS $database";
    $conn->query($db);
    $conn->close();
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    $usertable = "CREATE TABLE IF NOT EXISTS user (
    username VARCHAR(20) NOT NULL UNIQUE,
    password VARCHAR(20) NOT NULL
    )";
    
    $inventorytable = "CREATE TABLE IF NOT EXISTS inventory (
    spots VARCHAR(2) NOT NULL UNIQUE,
    taken TINYINT(1)
    )";
    
    $fill = "INSERT INTO inventory (spots, taken)
    VALUES ('A1', '0'), ('A2', '0'), ('A3', '0'), ('A4', '0'), ('B1', '0'), ('B2', '0'), ('B3', '0'), ('B4', '0')";
    
    $conn->query($usertable);
    $conn->query($inventorytable);
    $conn->query($fill);
    
    $conn->close();
?>
    
</body>
</html>