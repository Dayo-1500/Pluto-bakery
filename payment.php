<?php session_start();

if(!isset($_SESSION['email']))
  {echo "Please <a href='login_form.php'>log in </a> to buy bread";
   return false; }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="'pluto bakery', 'bakery', 'buy bread', 'bread', 'bread shop'">
<link rel="stylesheet" href="plutobakery.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>


<!-- Design the bread shop page -->
<p class="price"  style="margin-top:5%; text-align:center; font-weight:30px;"><u>Payment Section</u></p>

<br>
<p style="text-align:center;"> <?php echo "Amount to pay is: &#x20A6;" .$_SESSION['price']; ?> </p>
<div style="width:80vw; height:75vh; margin-left:4% auto;">
<iframe src="https://qa.interswitchng.com/paymentgateway/link/pay/bakery" name="payment-section" title="Payment" style="margin:1% 10%; box-sizing:content-box; height:100%; width:100%;"></iframe>	

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
<p style="text-align:center;">Created by Dayo Abdul &#169; 2021 </p>
</footer>
</body>
</html>
