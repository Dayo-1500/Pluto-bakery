<?php session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Log out</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="'pluto bakery', 'contact us'">
<link rel="stylesheet" href="plutobakery.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    
<?php 
echo "<p style='text-align:center; color:green; font-family:arial, sans-serif;'> You are logged out.</p>";
 echo "<meta http-equiv='refresh' content='2;url=index.html' />";

?>

 

</body>
</html>



