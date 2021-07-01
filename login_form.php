<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="'pluto bakery', login">
<link rel="stylesheet" href="plutobakery.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<?php 
if (isset ($_POST["login"]))           //begin the log in process once the login button is clicked
{
$email=$password="";                    //define variables and initialise to empty

$email=($_POST['email']);
$password=md5($_POST['password']);

include 'server_loginform.php';
}
?>


<!-- Design the login page -->
<div class="a">
 <h5> Login </h5>
  <div class="b"> 
  <form action="login_form.php" method="post">
      
      
  <input class="c" type="email" name="email" placeholder="Email" required autocomplete="on">
         <span class="error"> <?php if ((isset ($_POST["login"])) && (empty ($_POST["email"])))
                                     {echo "*Email required";}  ?> </span>
  
  <input class="c" type="password" name="password" placeholder="Password" required> 
         <span class="error"> <?php if((isset ($_POST["login"])) && (empty ($_POST["password"])))
                                     {echo "*Password required";}  ?> </span>
  
    <input style="box-shadow:none;" type="submit" name="login" value="Login">
 </form>
 </div>  
</div>
<p class="effects" style="width:30%; height:0.5rem; margin:2rem auto; text-align:center;"> Not yet registered? <a href="registration_form.php"> Create account.</a></p>



</body>
</html>
