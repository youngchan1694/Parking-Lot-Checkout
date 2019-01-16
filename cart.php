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
        width: 8em
    }
    
    a {
        color: inherit;
        text-decoration: none;
        
    }
    
    .center {
        width: 375px;
        margin: 0 auto;
    }
    
    p {
        font-size: 18px;
    }
    
    form, input {
        text-align: center;
        font-size: 24px;
    }

</style>
</head>

<body>
<br>
<h1> Your Cart </h1>
 
<br><br><br><br><br><br><br><br><br><br><br>

<?php
    $servername = "localhost";
    $username = "young";
    $password = "password";
    $database = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $database);
    
    echo '<div class="center">';
    echo "<p>Hello " . $_SESSION["name"] . "</p>";
    
    if(isset($_POST["spot"])) {
        $_SESSION["cart"] = $_POST["spot"];
        $spot = $_POST["spot"];
        
        echo "<p> Parking Spot:       " . $_POST["spot"] . "     x1 </p>";
        echo "<p>NOTE: limited to one spot per purchase </p>";
        echo "<br><br>";
        echo "<p>Total: $50.00</p>";
        
        $check = $conn->query("SELECT spots, taken FROM `inventory` WHERE `spots` = '$spot' AND `taken` = '0'");
            if(($check->num_rows) > 0) {
                echo '<form action="checkout.php"> <input type="submit" value="Checkout"> </form>';
            } else {
                echo "SOLD OUT";
            }
        
    } else {
        echo "Your cart is empty";
    }
    
    echo '</div>';
    
?>
    
</body>
</html>