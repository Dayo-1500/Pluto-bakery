<?php




// initiate connection with database


//connect to database
$conn = mysqli_connect('localhost', 'id17048003_gahs', 'Temitope.1900', 'id17048003_customer');

//check connection
if (!$conn) 
{ 
  die("Connection failed: " . mysqli_connect_error());
}

//check if email has already been registered.
$check = "SELECT email FROM registration WHERE email='$email'";
$response = mysqli_query($conn, $check);

if(mysqli_num_rows($response)>0) 
{
 printf("<p class='error' style='text-align:center;'>Email already registered, try another.<br></p>");
 return false;
}
$conn->close();

?>
