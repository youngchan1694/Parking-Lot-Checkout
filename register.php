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

label {
    text-align: center;
}

tr:nth-child(odd), td:nth-child(odd) {
    background-color: darkslategray;
}

tr:nth-child(even), td:nth-child(even)  {
    background-color: darkmagenta;
}

input[type=text], input[type=password] {
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 12px;
    background-color: white;
}

input[type=submit] {
    background-color: navy;
    width: 100%;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    object-position: center;
}

form {
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
}

div.form {
    display: block;
    text-align: center;
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
    
<form method="post" action="registercheck.php">
    <label> Username </label>
    <input type="text" name="regusername" class="textbox">
    <br><br>

    <label> Password </label>
    <input type="password" name="regpassword" class="textbox"> 
    <br><br>
    
    <label> Re-Enter </label>
    <input type="password" name="regrepassword" class="textbox"> 
    <br><br>
    
    <input type="submit" value="Register">
</form>
    

    
</body>
</html>