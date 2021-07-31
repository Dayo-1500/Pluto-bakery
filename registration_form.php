<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
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
    
<?php if (isset ($_POST["register"]))
{

//define variables and set to empty values
$fname=$sname=$prefix=$email=$password_1=$password_2=$street=$town=$state=$country=""; 

 //create a function to sanitise the data input from the client-side
 function check_input($data) {
 $data=trim($data);
 $data=stripslashes($data);
 $data=htmlspecialchars($data);
 return $data;
 }
 
// sanitise input from client side once submitted
 
$fname=check_input($_POST["fname"]);
$sname=check_input($_POST["sname"]);
$prefix=check_input($_POST["prefix"]);
$email=check_input($_POST["email"]);
$street=check_input($_POST["street"]);
$town=check_input($_POST["town"]);
$state=check_input($_POST["state"]);
$country=check_input($_POST["country"]);
$password_1=($_POST["password_1"]);
$password_2=($_POST['password_2']);


include 'server_registrationform.php';
}
?>


<!--Design the create account page--> 
  
    	         <p class="location">
             Already registered?  <br>  <a href="login_form.php"> Log in</a>
             </p><br><br>
             
  <div class="e">
    <fieldset class="f">
      <legend style="text-align:left;"> Create Account </legend>
        <form method="post" action="registration_form.php">

       <label for="fname" class="d">First name: </label>
       <input class="d g4" type="text" name="fname" id="fname" autocomplete="on">
<!-- use php empty() funtion to ensure that mandatory fields are not blank.-->   
       <span class="error"> <?php if ((isset ($_POST["register"])) && (empty ($_POST["fname"])))
                             {echo "*First name required";} 
                             ?> </span>
	
<br><br>
       <label for="sname" class="d">Surname: </label>
       <input class="d g" style="margin-left:3%;" type="text" name="sname" id="sname" autocomplete="on">
       
       <span class="error"> <?php if ((isset ($_POST["register"])) && (empty ($_POST["sname"]))) 
                             {echo "*Surname required";} ?> </span>       
<br>
       <input type="radio" id="prefix" name="prefix" value="Mr" required>Mr
       <input type="radio" id="prefix" name="prefix" value="Ms" required>Ms
      
       <span class="error"> <?php if ((isset ($_POST["register"])) && (empty ($_POST["prefix"])))
                                     {echo "*Add prefix";} ?> </span>     
       
<br><br>
       <label for="email" class="d">Email: </label>
       <input class="d g33" type="email" name="email" id="email" autocomplete="on" required> 
      
       <span class="error"> <?php if ((isset ($_POST["register"])) && (empty ($_POST["email"])))
                                     {echo "*Email required";} ?> </span> 
<br><br>        
  
       <label for="password" class="d">Password: </label>
       <input class="d g" type="password" name="password_1" id="password" style="margin-left:3%;" autocomplete="on" required> 
      
       <span class="error"> 
           <?php
           if ((isset ($_POST["register"])) && (empty ($_POST["password_1"]))) {echo "*Password required";} 
           ?> 
       </span>
<br><br>      
        <label for="password" class="d">Confirm password: </label>
       <input class="d g2" type="password" name="password_2" id="password" autocomplete="on" required> 
       
       <span class="error"> 
            <?php 
               if ((isset ($_POST["register"])) && (empty ($_POST["password_2"])))  {echo "*Password required";}  
               elseif((isset ($_POST["register"])) && (($_POST["password_1"]) !== ($_POST["password_2"])))
                               {echo "*Password not matching";}?>     <!--execute elseif statement if password doesn't match-->
             
       </span>
                            
<br><br>     
         <div style="border-top: 1px double #9f9f2d; width:100%;"</div>
  
         <p style="font-size:1.3rem; font-style:italic; color:#f9c11a; text-decoration:underline;"> Address(optional) </p>  
<br><br>
         <label for="street" class="d">Street: </label>
         <input class="d g" style="position:relative; left:3.4%;" type="text" name="street" id="street" autocomplete="on">
         
<br><br>
         <label for="town" class="d">Town/City: </label>
         <input class="d g5" type="text" name="town" id="town" autocomplete="on">
         
<br><br>
         <label for="state" class="d">State: </label>
         <input class="d g" style="position:relative; left:5%;" type="text" name="state" id="state" autocomplete="on">
        
<br><br>
         <label for="country" class="d">Country: </label>
         <input class="d g9" style="position:relative; left:1%;" type="text" name="country" id="country" autocomplete="on">
         
<br> <br>

         <input type="submit" name="register" value="Register">

<br>     
    </form> 
  </fieldset>
</div>

             
</body>
</html>
