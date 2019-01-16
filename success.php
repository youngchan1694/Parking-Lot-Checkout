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
<h1> Congratulations, the purchase was successful! </h1>
 
<br><br><br><br><br><br><br><br><br><br><br>
    
<h2><a href="main.php">Return to Home Page</a></h2>

    
<?php
    $servername = "localhost";
    $username = "young";
    $password = "password";
    $database = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $database);
        
    $spot = $_SESSION["cart"];
    $buy = "UPDATE inventory
    SET taken = '1'
    WHERE spots = '$spot'";
    
    $conn->query($buy);
?>
    

    
</body>
</html>
