<?php session_start();

if(!isset($_SESSION['email']))               //this page will only be available to logged in users
  
{echo "Please <a href='login_form.php'>log in </a> to buy bread";
   
return false; 
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<title>Profile</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="keywords" content="'pluto bakery', 'bakery', 'buy bread', 'bread', 'bread shop'">

<link rel="stylesheet" type="text/css" href="plutobakery.css">

<link rel="stylesheet" type="text/css" media="(max-width:1299px)" href="plutobakery1024px.css">

<link rel="stylesheet" type="text/css" media="(max-width:999px)" href="plutobakery760px.css">

<link rel="stylesheet" type="text/css" media="(max-width:600px)" href="plutobakery218px.css">	

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>

<body>



<?php

 if(isset ($_POST["submit"])): ?>


<?php

if((md5($_POST['oldpassword'])) !== ($_SESSION['password']))        //this ensures that the old password presented by user is correct
     
    {
            
echo "<p class='d' style='text-align:center; color:green;'> Old password not correct, please use the correct one</p>";
            
return false;
         
}
         

elseif(($_POST['newpassword_1']) !== ($_POST['newpassword_2']))     //this ensures that newpassword_1=newpassword_2
  
 { 
    
echo "<p class='d' style='text-align:center; color:green;'> Password does not match</p>"; 
    
exit();
   
 }


else
{
$oldpassword=$newpassword_1="";          //initialise variables and set to empty


$oldpassword=($_POST['oldpassword']);

$newpassword_1=($_POST['newpassword_1']);



$newpassword = md5($newpassword_1);

include "server_changepassword.php"; 

}


endif;
?>






<!-- Design the profile page -->
  
  

<br> <br>
  

<h2 style="font-family:Helvetica, sans-serif; text-align:center; font-size:2rem; letter-spacing:6px; text-decoration:underline;">My Profile</h2>

 
 
<div class="profile">  
  
<div style="border-top: 1px double #9f9f2d; width:100%;"></div>

   
<br>
  
<p style="font-size:1.3rem; font-style:italic; color:#f9c11a; text-decoration:underline;"> Identity </p>
       
<label for="fname" class="d">First name: </label>
       
<span class="d g4" type="text" style="border:none;" name="fname" > <?php echo $_SESSION["fname"]; ?> </span>
	

<br><br><br>
       

<label for="sname" class="d">Surname: </label>
       
<span class="d g4" type="text" style="border:none; margin:0 6%;" name="sname"> <?php echo $_SESSION["sname"]; ?> </span>

       

<br><br><br>
       

<label for="email" class="d">Email: </label> 
       
<span class="d g9" style="border:none; margin-left:3%;" name="email"> <?php echo $_SESSION["email"]; ?> </span>

<br><br>

         

<div style="border-top: 1px double #9f9f2d; width:100%;"></div>
  <br>
 
        
<p style="font-size:1.3rem; font-style:italic; color:#f9c11a; text-decoration:underline;"> Address </p>
  
        
<label for="street" class="d">Street: </label>
        
<span class="d g9" style="border:none; position:relative; left:4%;" name="street"> <?php echo $_SESSION["street"]; ?> </span>

        

<br><br><br>
        

<label for="town" class="d">Town/City: </label>
        
<span class="d g9" style="border:none; position:relative;" name="town"> <?php echo $_SESSION["town"]; ?> </span>
         

<br><br><br>
        

<label for="state" class="d">State: </label>
        
<span class="d g9" style="border:none; position:relative; left:5%;" name="state"> <?php echo $_SESSION["state"]; ?> </span>

         

<br><br><br>
        

<label for="country" class="d">Country: </label>
        
<span class="d g33" style="border:none; position:relative;" name="country"> <?php echo $_SESSION["country"]; ?> </span>

         
 
<br><br>
 

<div style="border-top: 1px double #9f9f2d; width:100%;"></div>
<br>
	
<p style="font-size:1.3rem; font-style:italic; color:#f9c11a; text-decoration:underline;"> Change Password </p> 
 
	 
         
	

<form action="profile_page.php" method="post">

	<label for="oldpassword" class="d">Old Password: </label>
         

<input class="d g" type="password" style="position:relative; left:2%;" name="oldpassword" >  
         
               
      
	
<br>
 
        
<label for="newpassword_1" class="d">New Password: </label>
         
<input class="d g" type="password" style="position:relative; left:1.5%;" name="newpassword_1">      
	
	
<br>
 
        
<label for="newpassword_2" class="d">Confirm Password: </label>
         
<input class="d g5" type="password" name="newpassword_2"> 

  
  
<br><br><br>


<input style="border:0.3px solid #737373; box-shadow:none; margin:2rem 43%;" type="submit" name="submit" value="Change">

 

</form> 

</div>

</body>

</html>



