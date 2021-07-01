<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Verify Email</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="'pluto bakery', sign-up">
<link rel="stylesheet" href="plutobakery.css">
</head>
<body>
    
<?php if (isset ($_POST["register"]))
{

//define variables and set to empty values
$email=""; 

 //create a function to sanitise the data input from the client-side
 function check_input($data) {
 $data=trim($data);
 $data=stripslashes($data);
 $data=htmlspecialchars($data);
 return $data;
 }
 
// sanitise input from client side once submitted
$email=check_input($_POST["email"]);

include "server_emailverify.php"; // the script will verify that the email has not been registered before

$_SESSION['email']= '$email'; //create an email session


// send email-verification link to user
$to= "$email";
$subject= "Verify Email";
$from = "no-reply@plutobakery.com";

//set content-type header
$headers= 'MIME-version:1.0'. "\r\n";
$headers.= 'Content-type: text/html; charset= iso-8859-1'. "\r\n";
$headers.= 'From:' .$from. "\r\n".                      //create email headers
            'Reply-To:' .$from. "\r\n".
            'X-Mailer:PHP/' .phpversion();


//Email message
$message= "<html><body>";
$message= "<p style='font-family:Helvetica, sans-serif;'> Hello,</p>";
$message=  "<p style='font-family:Helvetica, sans-serif;'> Thanks so much for registering on our website. <br>Please click on the link below to verify your email address. <br></p>";
$message="<a href='https://plutobakery.000webhostapp.com/registration/registration_form.php' style='background-color:green; color:white; padding:12px; margin-left:20%;'>Verify email address</a>";
$message= "<p style='font-family:Helvetica, sans-serif;'><br> <br> If the button is not working, you can click on this link to verify your email: <br> https://plutobakery.000webhostapp.com/registration/registration_form.php </p>";
$message= "<p>><br><br><br><br><br><br> Do not reply to this message because the email address is not monitored.</p>";
$message= "<html><body>";

//sending email
if(mail($to, $subject, $message, $headers))
    {
    echo "Do not close your browser.<br><br>
          A link has been sent to .$email. please check your inbox and click on the link to confirm your email address.";
    }
    else { echo "Unable to register at the moment, please try again later. <br>Thank you."; }

}
?>


<!--Design the email verification page--> 
   
   <form action="emailverify.php" method="post">
       
    <div style="width=15%; height=15%; margin:10% 30%;">         
  
       <h5 style="margin-top:1%;"> Let's start</h5>
<br>
    <label for="email" style="font-family:Tahoma, sans-serif; letter-spacing:2px; margin-left:5%;">Email: <input class="g" style="margin-left:6%; " type="email" name="email" id="email" autocomplete="on" required></label>
       
       <span class="error"> <?php if ((isset ($_POST["register"])) && (empty ($_POST["email"])))
                                     {echo "*Email required";} ?> </span> 
                                     
                                     
                 <br> <br>
         <input type="submit" style="margin-right:10rem; width:10vw;" name="register" value="Submit">
</div>
</form>
             
</body>
</html>
