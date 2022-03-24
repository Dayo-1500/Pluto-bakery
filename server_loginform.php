<?php 


// error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connect to database
$conn = mysqli_connect('****', '*****', '*****', '*****');

//check connection
if (!$conn) 
{ 
  die("Connection failed: " . mysqli_connect_error());
}

//select data from database
$sql = "SELECT email, password, fname, sname, street, town, state, country FROM registration WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result))         //fetch associative array 
{
$_SESSION["email"] = $row["email"];
$_SESSION["password"] = $row["password"];
$_SESSION["fname"] = $row['fname'];
$_SESSION["sname"] = $row['sname'];
$_SESSION["street"] = $row['street'];
$_SESSION["town"] = $row['town'];
$_SESSION["state"] = $row['state'];
$_SESSION["country"] = $row['country'];
}

if(isset($_SESSION['email']))
{
printf("<p style='text-align:center; color:green;'> You are now logged in.</p>");
 echo "<meta http-equiv='refresh' content='2;url=2index.html' />";
}


elseif(mysqli_num_rows($result)==0)
{
echo "<p class='error' style='text-align:center;'>*Incorrect email or password. </p>";
return false;
}



mysqli_close($conn);
?>
