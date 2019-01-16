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
<h1> Registration </h1>
    
<?php
    $servername = "localhost";
    $username = "young";
    $password = "password";
    $database = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $database);
    
    $username = $_POST["regusername"] ?? null;
    $password = $_POST["regpassword"] ?? null;
    
    if($_POST["regusername"] != "" && $_POST["regpassword"] != "" && $_POST["regrepassword"] != ""){
        if(isset($_POST["regusername"]) && isset($_POST["regpassword"]) && isset($_POST["regrepassword"])) {
            if($_POST["regpassword"] == $_POST["regrepassword"]) {
                try {
                    $check = $conn->query("SELECT * FROM `user` WHERE `username` = '$username'");
                    if($check->num_rows == 0) {
                        $insert = "INSERT INTO user (username, password)
                        VALUES ('$username', '$password')";

                        $conn->query($insert);

                        echo "Congratulations! You are now registered";
                        
                    } else {
                        echo "This user already exists, please login or try again";
                    }
                } catch (Exception $e) {
                    echo "Error: ", $e->getMessage();
                }
            } else {
                echo "The passwords do not match, please try again";
            }
        } else {
            echo "Please fill out all the fields";
        }
    } else {
        echo "The field(s) are blank";
    }
    
    $conn->close();
?>
    
<p><a href="register.php"> click here to go back to registration screen </a></p>
<p><a href="login.php"> click here to go to the login screen </a></p>


    
</body>
</html>