
<!DOCTYPE html>
<html>
<head>
<title>Create Account</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="'pluto bakery', sign-up">
<link rel="stylesheet" href="plutobakery.css">
</head>
<body>

<?php


// initiate connection with database


//connect to database
$conn = new mysqli('localhost', 'id17048003_gahs', 'Temitope.1900', 'id17048003_customer');

//check connection
if ($conn->connect_error) 
{ 
  die("Connection failed: " . $conn->connect_error);
}

//insert data into database
$submit_1 = "INSERT INTO messages (sname, prefix, email, message) VALUES ('$sname', '$prefix', '$email', '$message')";


if( mysqli_query($conn, $submit_1))
{
printf("<p class='description' style='text-align:center; border:none;'> Message delivered, we will get back to you soon.<br> Thank you.</p>");
}
else
{
echo "<p class='description' style='text-align:center; border:none;'>Unable to deliver messages at the moment.<br> Please try again later: </p>" . mysqli_error($conn);
}
$conn->close();

?>

</body>
</html>
