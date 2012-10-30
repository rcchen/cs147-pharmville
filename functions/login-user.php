<?php

	// Include the database config file
	include_once('../config.php');

	// Get the POST values from the login form
	$userEmail = $_POST['userEmail'];
	$userPassword = $_POST['userPassword'];

	// Hash the password
	$userPassword = hash('sha1', $userPassword);

	// Attempt to pull the relevant line from the database
	$result = $mysqli->query("SELECT userId FROM md_users WHERE userEmail = '$userEmail' AND userPassword = '$userPassword'");
	
	// No results are pulled
	if ($result->num_rows == 0) {
		return 'Incorrect email or password. Please try again.';
	} 

	// Otherwise, set the session stuff
	else {
		$row = $result->fetch_assoc();
		$_SESSION['id'] = $row['userId'];
		$_SESSION['email'] = $row['userEmail'];
		return 'Successful login!';
	}

?>