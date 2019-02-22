<?php 

	// this file accept user input its a server side file
	
	// this function is used for stored data in session
	session_start();

	include('config.php');  // this is database connection file 

	// here we accept the user input
	$username = $_POST['username'];
	$password = $_POST['password'];

	// query for get record from database of specific user pass username and pssword
	$sql = "SELECT username, user_id FROM login WHERE username = '$username' AND password = '$password'";

	// run query
	$cnt = mysqli_query($con, $sql);

	// here get record count
	$result = mysqli_num_rows($cnt);

	// check record count is greater than 0 means record found 
	if($result > 0){

		// here stored username in session
		$_SESSION['username'] = $username; 

		// this is for when user credentials is valid then redirect to our dashboard page or our main page
		header('location:dashboard.php');

	}else{

		// this is error msg and redirect to login page
		echo "invalid username and password";
		header("location:index.php");
	}

 ?>