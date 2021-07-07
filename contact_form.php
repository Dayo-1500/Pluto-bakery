<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="'pluto bakery', 'contact us'">
<link rel="stylesheet" href="plutobakery.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> 
</head>
<body>
    
<?php if (isset ($_POST["submit"]))
{

//define variables and set to empty values
$sname=$prefix=$email=$message=""; 

 //create a function to sanitise the data input from the client-side
 function check_input($data) {
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
  
<div class="wuto-plutobakery_icon2" style="background-image:url('spritesheet-wuto.png'); width:185px; height:273px; float:right;"> </div>  

<form action="contact_form.php" method="post">
  <p class="i" style="margin-left:36%;">Get in touch</p>
  
  <p style="font-family:'Dancing Script', cursive; margin-left:37%; font-size:1.3rem; letter-spacing:0.5rem;"> We'll reply in 24hours.</p>

  <div class="j"> 
  
  <br>
  <br> 
  <br>
  <label for="sname" class="d">Surname: </label>
  <input class="d g" style="margin-right:1.4rem;" type="text" name="sname" id="sname" autocomplete="on" maxlength="21">
         <span class="error"> <?php if ((isset ($_POST["submit"])) && (empty ($_POST["sname"])))
                             {echo "*Surname required";} ?> </span>

  <input type="radio" id="prefix" name="prefix" value="Mr" required>Mr
  <input type="radio" id="prefix" name="prefix" value="Ms" required>Ms
         <span class="error"> <?php if ((isset ($_POST["submit"])) && (empty ($_POST["prefix"])))
                             {echo "*Prefix required";} ?> </span>
 
  
  <br>
  <label for="email" class="d">Email: </label>
  <input class="d g" style="margin-left:2.8rem;" type="email" name="email" id="email" autocomplete="on" maxlength="21" required><br>
           <span class="error"> <?php if ((isset ($_POST["submit"])) && (empty ($_POST["email"])))
                             {echo "*Email required";} ?> </span>
  
  <label for="message" class="d">Message: </label>
  <textarea name="message" id="message" class="j" style="margin-top:8%; width:25vw; height:25vh; word-wrap=break-word;" maxlength="220"> </textarea>
           <span class="error"> <?php if ((isset ($_POST["submit"])) && (empty ($_POST["message"])))
                             {echo "*Message required";} ?> </span>
  <br>
  <br>
      <a href="bread-shop-1.html">Test shop</a>
  <input style="border:0.3px solid #737373; width:6.5vw; margin-left:42%; box-shadow:none;" type="submit" name="submit" value="Send">

 </form> 
</div>
    
    
</body>
</html>



