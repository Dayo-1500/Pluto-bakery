
<!DOCTYPE html>
<html>
<head>
<title>Create Account</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="'pluto bakery', sign-up">
<link rel="stylesheet" href="plutobakery.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
  
    	         <p class="effects" style="width:15%; height:2rem; margin:1rem auto; text-align:center; float:right;">
             Already registered?  <br>  <a href="login_form.php"> Log in</a>
             </p>
             
  <div class="e">
    <fieldset class="f">
      <legend style="text-align:left;"> Create Account </legend>
        <form method="post" action="registration_form.php">

       <label for="fname" class="d">First name: </label>
       <input class="d g" type="text" name="fname" id="fname" autocomplete="on">
    
<!-- use php empty() funtion to ensure that mandatory fields are not blank.-->   
       <span class="error"> <?php if ((isset ($_POST["register"])) && (empty ($_POST["fname"])))
                             {echo "*First name required";} 
                             ?> </span>
	
<br>
       <label for="sname" class="d">Surname: </label>
       <input class="d g" style="margin-left:1.4rem; margin-right:1.4rem;" type="text" name="sname" id="sname" autocomplete="on">
       
       <span class="error"> <?php if ((isset ($_POST["register"])) && (empty ($_POST["sname"]))) 
                             {echo "*Surname required";} ?> </span>       

       <input type="radio" id="prefix" name="prefix" value="Mr" required>Mr
       <input type="radio" id="prefix" name="prefix" value="Ms" required>Ms
      
       <span class="error"> <?php if ((isset ($_POST["register"])) && (empty ($_POST["prefix"])))
                                     {echo "*Add prefix";} ?> </span>     
       
<br>
       <label for="email" class="d">Email: </label>
       <input class="d g" style="margin-left:2.8rem;" type="email" name="email" id="email" autocomplete="on" required><br>
      
       <span class="error"> <?php if ((isset ($_POST["register"])) && (empty ($_POST["email"])))
                                     {echo "*Email required";} ?> </span> 
        
  
       <label for="password" class="d">Password: </label>
       <input class="d g" type="password" name="password_1" id="password" autocomplete="on" required> <br>
      
       <span class="error"> 
           <?php
           if ((isset ($_POST["register"])) && (empty ($_POST["password_1"]))) {echo "*Password required";} 
           ?> 
       </span>
       
        <label for="password" class="d">Confirm password: </label>
       <input class="d g" style="width:18vw;" type="password" name="password_2" id="password" autocomplete="on" required> <br>
       
       <span class="error"> 
            <?php 
               if ((isset ($_POST["register"])) && (empty ($_POST["password_2"])))  {echo "*Password required";}  
               elseif((isset ($_POST["register"])) && (($_POST["password_1"]) !== ($_POST["password_2"])))
                               {echo "*Password not matching";}     //execute elseif statement if password doesn't match
            ?> 
       </span>
                            
       
         <div style="border-top: 1px double #9f9f2d; width:100%;"</div>
  
         <p style="font-size:1.3rem; font-style:italic; color:#f9c11a; text-decoration:underline;"> Address(optional) </p>
  
         <label for="street" class="d">Street: </label>
         <input class="d g" style="position:relative; left:2rem;" type="text" name="street" id="street" autocomplete="on">
         
<br>
         <label for="town" class="d">Town/City: </label>
         <input class="d g" style="position:relative; left:0.5rem;" type="text" name="town" id="town" autocomplete="on">
         
<br>
         <label for="state" class="d">State: </label>
         <input class="d g" style="position:relative; left:2.5rem;" type="text" name="state" id="state" autocomplete="on">
        
<br>
         <label for="country" class="d">Country: </label>
         <input class="d g" style="position:relative; left:1.4rem;" type="text" name="country" id="country" autocomplete="on">
         
         <br>
         <input type="submit" name="register" value="Register">
<br>     
    </form> 
  </fieldset>
</div>

             
</body>
</html>
