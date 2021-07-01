
<?php


// initiate connection with database


//connect to database
$conn = mysqli_connect('localhost', 'id17048003_gahs', 'Temitope.1900', 'id17048003_customer');

//check connection
if (!$conn) 
{ 
  die("Connection failed: " . mysqli_connect_error());
}


//update data in database
$submit_1 = "UPDATE registration SET password='$newpassword'";


if( mysqli_query($conn, $submit_1))
{
printf("<p class='d' style='text-align:center; color:green;'> Password changed.</p>");
}

else
{
echo "<p class='d' style='text-align:center;'>Unable to change password at the moment: </p>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
