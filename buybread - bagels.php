<?php session_start();


if(!isset($_SESSION['email']))
  
{echo "Please <a href='login_form.php'>log in </a> to buy bread";
   
return false; 
}

?>



<!DOCTYPE html>

<html lang="en">

<head>

<title>Buy bread</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="keywords" content="'pluto bakery', 'bakery', 'buy bread', 'bread', 'bread shop'">

<link rel="stylesheet" type="text/css" href="plutobakery.css">

<link rel="stylesheet" type="text/css" media="(max-width:1299px)" href="plutobakery1024px.css">

<link rel="stylesheet" type="text/css" media="(max-width:920px)" href="plutobakery760px.css">

<link rel="stylesheet" type="text/css" media="(max-width:600px)" href="plutobakery218px.css">	

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

</head>

<body>



<?php
if(isset($_POST['payment']))

{ 
    
//define variables and set to empty values
    
$phone=$quantity=$price=$bread_type="";
    
    

//Create function to sanitise input values
    
function check_input($data) 
{
        
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

<header class="head"> 
  
<h1> Buy bread </h1>
  
  
<p style="font-family:'dancing script', cursive; font-size:1.5em; padding-bottom:5vw; letter-spacing:0.1875rem; text-align:center;">
  Just a few clicks and it is yours. . . </p>

</header>






<picture class="iconbuy">

<source srcset="images/bagels-buy320px.png" media="(max-width:400px)">

<source srcset="images/bagels-buy480px.png" media="(max-width:720px)">

<source srcset="images/bagels-buy760px.png" media="(max-width:999px)">

<source srcset="images/bagels-buy760px.png" media="(max-width:1299px)">

<source srcset="images/bagels-buy1366px.png" media="(min-width:1366px)">

<img src="images/bagles-buy760px.png" title="Bagels" alt="Bagels">

</picture>


<!--Bagels-->


<br>

<br>
<br>

<h5 class="smallsize" style="text-align:center;"> Bagels</h5>

<div class="effects buybread">


<p>
<strong style="font-size:1.2rem;">Notice: </strong><br><br>
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





<form action="buybread - bagels.php" method="post" class="buybread" oninput="price.value = b.value * c.value">
    


<label for="phone" class="d">Phone no: </label>

<input class="d g71" type="tel" name="phone" id="phone" placeholder="08000000000" autocomplete="on" required>
<br><br>



<label for="quantity" class="d">How many <br>do you want:</label>

<input class="d g6" type="number" placeholder="1" name="quantity" id="b" required>
<br><br>
 



<input type="hidden" id="c" value=300> 
<input type="hidden" name="bread_type" value="Bagels">



<label for="price" class="d">Price &#x20A6;:</label>

<input class="d g3" name="price" id="price"  for="b c" value="">  </input>



<p style="text-align:center;"> Pay this <em> exact amount</em> in the payment section.</p>


<div class="buybread2">
<input type="submit" style="margin:2em auto; font-size:1em;" name="payment" value="Pay" target="_blank">

</div>

</form>

</div>
      
      







<footer>

<p>Customer care: support@plutobakery.space

</p><br>


<p>
<u>Address</u>

<br>181 Flowering street

<br>Off Oyebo close

<br>Mokola

<br>Ibadan

<br>Oyo

<br>Nigeria

<br>Tel:+2348000007777
</p>



<p style="text-align:center;">Created by Dayo Abdul &#169; 2021 </p>

</footer>

</body>

</html>






























