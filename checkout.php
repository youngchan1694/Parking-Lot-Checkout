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
    
    label, select, input, h1 {
        text-align: center;
        
    }
    
    .center {
        width: 500px;
        height: 200px;
        margin: 0 auto;
    }
    
    a {
        color: inherit;
        text-decoration: none;
    }
</style>
<script src="creditcard.js"></script>
</head>

<body>
<br>
    
<h1> Checkout </h1>
<br><br><br><br><br><br><br><br>
<form>
    <div class="center">
        <label>Select credit card</label>
        <select tabindex="11" id="CardType" style="margin-left: 10px;">
            <option value="AmEx">American Express</option>
            <option value="Discover">Discover</option>
            <option value="MasterCard">MasterCard</option>
            <option value="Visa">Visa</option>
        </select>
        <br><br>
        <label>Enter Credit Card Number: </label>
        <input type="text" id="CardNumber" maxlength="24" size="24"/>
        <br><br>
        <label>Enter CVV: </label>
        <input type="text" id="cvv" maxlength="3" size="3"/>
        <br><br>
        <label>Name on Card: </label>
        <input type="text" id="fname" size="10"/>
        <input type="text" id="lname" size="10"/>
        <br><br>
        <label>Expiration Date: </label>
        <select name="month">
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>

        <select name="year">
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
        </select>
        <br><br>
        <button id="button" type="button" onclick="purchase();">Purchase</button>
        <p id="msg"></p>
    
    </div>
</form>
        
<script type="text/javascript">
    function purchase () {
        if (checkCreditCard (document.getElementById('CardNumber').value, document.getElementById('CardType').value)) {
            var cvvnum = parseInt(document.getElementById("cvv").value);
            if((cvvnum >= 100) && (cvvnum < 9999)) {
                var firstname = document.getElementById("fname").value;
                var lastname = document.getElementById("lname").value;
                if(firstname != "" && lastname!= "") {
                    document.getElementById("msg").innerHTML = "Success! Please wait while you are moved";
                    window.setTimeout(function(){
                        window.location.href = "success.php";
                    }, 5000); 
                } else {
                    document.getElementById("msg").innerHTML = "Error with Name, please try again";
                }
            } else {
                document.getElementById("msg").innerHTML = "Error with CVV, please try again";
            }
        } else {
            document.getElementById("msg").innerHTML = "Error with Credit Card, please try again";
        }
    } 
</script>

    
<script src="./creditcardjs-v0.10.13.min.js">
    
</script>


    
</body>
</html>