<?php session_start();

if(!isset($_SESSION['email']))
  {echo "Please <a href='login_form.php'>log in </a> to buy bread";
   return false; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Buy bread</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="'pluto bakery', 'bakery', 'buy bread', 'bread', 'bread shop'">
<link rel="stylesheet" href="plutobakery.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> 
</head>
<body>

<?php
if(isset($_POST['payment']))
{ 
    //define variables and set to empty values
    $phone=$quantity=$price=$bread_type="";
    
    //Create function to sanitise input values
    function check_input($data) {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    
    //Sanitise input from users, but price and bread_type aren't sanitised because they are gotten from the page itself
    $phone=check_input($_POST["phone"]);
    $quantity=check_input($_POST["quantity"]);
    $price=$_POST['price'];
    $bread_type=$_POST['bread_type'];
    
    $_SESSION['price']=$price;            //make $price a session variable
    
    //server will submit to database
    include "server_payment.php";
}
?>

<!-- Design the bread shop section -->
<header> 
  <h1> Buy bread </h1>
  <br>
  <p style="font-family:'dancing script', cursive; font-size:1.8rem; letter-spacing:3px; text-align:center;">
  Just a few clicks and it is yours. . . </p>  
</header>

<!--Rye bread-->
<div style="margin:4rem; float:left;"> 
<div class="rye-buy" title="Rye bread" style="background-image:url('spritesheet-buybread.png');
  width:501px; height:300px;"> </div>
<h5 style="text-align:center;"> Rye bread</h5>
</div>

<div class="effects" style="width:45%; margin-left:45%;">

<p>
<strong style="font-size:1.2rem; color:">Notice: </strong><br><br>
When you place an order and pay through our secure channel, we bake then call you to come pick your order at our bakery house. 

<br><br>
If you wish to have it delivered to your place, please discuss transport cost with our customer care officers. 
The cost varies with distance.
 <br><br>
We are available to answer your questions, just talk to us on our <a href="contact_form.php"> Contact us</a> page.
<br>
Thanks a lot for your patronage.
</p>
<br> <br> 


<form action="buybread - rye.php" method="post" style="width:100%;" oninput="price.value = b.value * c.value">
    
<label for="phone" class="d">Phone number: </label>
<input class="d g" style="margin-left:10%; width:15vw;" type="tel" name="phone" id="phone" placeholder="08000000000" autocomplete="on" required><br>

<label for="selectquantity" class="d">How many do you want?</label>
<input class="d g" style=" width:15vw;" type="number" name="quantity" id="b" value=" " required>

<input type="hidden" id="c" value=350> 
<input type="hidden" name="bread_type" value="Rye bread">
<br>  

<label for="price" class="d">Price &#x20A6;:</label>
<input name="price" id="price" for="b c">  </input>

<p> Pay this <em> exact amount</em> in the payment section.</p>
<input type="submit" name="payment" value="Pay" target="_blank">
</form>
</div>
      
      



<footer>
<pre>
Customer care: support@plutobakery.com

<u>Address</u>
181 Flowering street
Off Oyebo close
Mokola
Ibadan
Oyo
Nigeria
Tel:+2348000007777
</pre>

<p style="text-align:center;">Created by Dayo Abdul &#169 2021 </p>
</footer>
</body>
</html>




