<!DOCTYPE html>

<html lang="en">

<head>

<title>Contact us</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="keywords" content="'pluto bakery', 'bakery', 'buy bread', 'bread', 'bread shop'">

<link rel="stylesheet" type="text/css" href="plutobakery.css">

<link rel="stylesheet" type="text/css" media="(max-width:1299px)" href="plutobakery1024px.css">

<link rel="stylesheet" type="text/css" media="(max-width:999px)" href="plutobakery760px.css">

<link rel="stylesheet" type="text/css" media="(max-width:600px)" href="plutobakery218px.css">	

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

</head>

<body>
    


<?php if (isset ($_POST["submit"]))


{

$sname=$prefix=$email=$message=""; 

//define variables and set to empty values


$sname=$prefix=$email=$message=""; 
 //create a function to sanitise the data input from the client-side
 

function check_input($data) 
{
 
$data=trim($data);
 
$data=stripslashes($data);
 
$data=htmlspecialchars($data);
 
return $data;
 
}
 


// sanitise input from client side once submitted

$sname=check_input($_POST["sname"]);

$prefix=check_input($_POST["prefix"]);

$email=check_input($_POST["email"]);

$message=check_input($_POST["message"]);




include 'server_contactform.php';

}

?>






<!-- Design contact us page -->



<picture class="icon" style="margin-bottom:2rem;">

<source srcset="images/plutobakery_icon2-320px.png" media="(max-width:400px)">

<source srcset="images/plutobakery_icon2-480px.png" media="(max-width:720px)">

<source srcset="images/plutobakery_icon2-760px.png" media="(max-width:999px)">

<source srcset="images/plutobakery_icon2-1024px.png" media="(max-width:1299px)">

<source srcset="images/plutobakery_icon2-1366px.png" media="(min-width:1366px)">

<img src="images/plutobakery_icon2-760px.png" title="Plutobakery" alt="Plutobakery">

</picture>




<br>




<br><br>

<form action="contact_form.php" method="post">
  
<p class="i">Get in touch</p>
  
  
<p style="font-family:'Dancing Script', cursive; font-size:1em; text-align:center; letter-spacing:0.5rem; margin-bottom:2%; margin-left:12%;"> We'll reply in 24hours.</p>

  

<div class="j"> 
  
  
<br>
  <br> 
  <br>
  

<label for="sname" class="d">Surname: </label>
  
<input class="d g" type="text" name="sname" id="sname" autocomplete="on" maxlength="21" required>
         
<span class="error"> 
<?php if ((isset ($_POST["submit"])) && (empty ($_POST["sname"])))
                             
{echo "*Surname required";} ?> </span>

  

<br>
<input type="radio" id="prefix" name="prefix" value="Mr" required>Mr
  
<input type="radio" id="prefix" name="prefix" value="Ms" required>Ms
         
<span class="error"> <?php if ((isset ($_POST["submit"])) && (empty ($_POST["prefix"])))
                             
{echo "*Prefix required";} ?> </span>
 
  
  
<br>
<br>

<label for="email" class="d">Email: </label>
  
<input class="d g8" type="email" name="email" id="email" autocomplete="on" maxlength="21" required>
<br>
           
<span class="error"> 
<?php if ((isset ($_POST["submit"])) && (empty ($_POST["email"])))
                             
{echo "*Email required";} ?> </span>
  
  
<br><br><br>

<label for="message" class="d">Message: </label>
  
<textarea name="message" id="message" style=" word-wrap=break-word;" maxlength="220"> </textarea>
           
<span class="error"> 
<?php if ((isset ($_POST["submit"])) && (empty ($_POST["message"])))
                             
{echo "*Message required";} ?> </span>
  
<br>
  <br>
  

<div class="buybread2">
<input style="border:0.3px solid #737373; box-shadow:none;" type="submit" name="submit" value="Send">

 
</div>
</form> 


</div>

</body>

</html>



