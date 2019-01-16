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
    
    select {
        width: 150px;
        height: 50px;
        font-size: 24px;
    }
    
    
    div.absolute {
        float: right;
        position: relative;
        top: -150px;
        right: 50px;
    }
    
    input[type=submit] {
        background-color: navy;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        object-position: center;
    }
    
    a {
        color: inherit;
        text-decoration: none;
    }
</style>
</head>

<body>
<br>
<h1> Inventory </h1>
<br><br><br><br><br><br><br><br><br>

<form method="post" action="cart.php">
    <label>Spots</label>
    <select name="spot">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="A4">A4</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3</option>
        <option value="B4">B4</option>
    </select>
    <input type="submit" value="Add to cart">
    <br><br>
</form>

<div class="absolute">
    <img src="parkinginventory.png" alt="lot" width="700px" height="400px" border="3px solid cyan">
</div>

    
</body>
</html>