
<?php


// initiate connection with database


//connect to database
$conn = mysqli_connect('****', '*****', '*****', '*****');

//check connection
if (!$conn) 
{ 
  die("Connection failed: " . mysqli_connect_error());
}


$fname=$sname=$prefix="";   //initialise session variables and set to zero

$fname=$_SESSION['fname'];
$sname=$_SESSION['sname'];




//insert data into database
$submit_1 = "INSERT INTO bread_orders (fname, sname, phone, bread_type, quantity, price) 
VALUES ('$fname', '$sname', '$phone', '$bread_type', '$quantity', '$price')";


if( !mysqli_query($conn, $submit_1))
{
echo "<p class='d' style='text-align:center;'>Unable to receive payment at the moment: </p>" . mysqli_error($conn);
}
else
{
    //redirect to payment page to be handled by Interswitch
    echo "<meta http-equiv='refresh' content='2;url=payment.php' />";
}

mysqli_close($conn);

?>
