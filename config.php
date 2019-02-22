<?php 
							// host   // username   // database name
	$con = mysqli_connect('localhost', 'root', '', 'my_test_db'); // use mysqli
											//password
	if(! $con){

		echo "Connection Error"; // check connection and return error msg
		die();

	}

	//this is here we configure our database connection

 ?>


