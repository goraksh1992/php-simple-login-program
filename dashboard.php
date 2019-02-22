<?php 
	
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Dashboard </title>
</head>
<body>								<!-- this is to show username which is stored in session-->
	<h2> Login Successfully  Hello <?php echo $_SESSION['username']; ?></h2>
</body>
</html>

<!-- this is our success page after successfull login -->

<!-- lets run it -->