<?php session_start();

if(!isset($_SESSION['email']))
  {echo "Please <a href='login_form.php'>log in </a> to buy bread";
   return false; }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pluto Bakery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="'pluto bakery', 'bakery', 'buy bread', 'bread', 'bread shop'">
<link rel="stylesheet" type="text/css" href="plutobakery.css">
<link rel="stylesheet" type="text/css" media="(max-width:1024px)" href="plutobakery1024px.css">
<link rel="stylesheet" type="text/css" media="(max-width:768px)" href="plutobakery760px.css">
<link rel="stylesheet" type="text/css" media="(max-width:218px)" href="plutobakery760px.css">	
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>


<!-- Design the bread shop page -->
<p class="price"  style="margin-top:5%; text-align:center; font-weight:30px;"><u>Payment Section</u></p>

<br>
<p style="text-align:center;"> <?php echo "Amount to pay is: &#x20A6;" .$_SESSION['price']; ?> </p>
<div class="paymentsection">
<iframe src="https://paystack.com/pay/k6y4qbm51x" name="payment-section" title="Payment" style="box-sizing:border-box; height:100%; width:100%;"></iframe>	

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




