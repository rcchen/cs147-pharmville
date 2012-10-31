<?php

	include_once('../config.php');

	// Get the POST values from the login form
	$userEmail = $_POST['userEmail'];
	$userPassword = $_POST['userPassword'];

	// Hash the password
	$userPassword = hash('sha1', $userPassword);

	// Attempt to pull the relevant line from the database
	$result = $mysqli->query("SELECT userId, userEmail FROM md_users WHERE userEmail = '$userEmail'");
	
	// No results are pulled
	if ($result->num_rows != 0) {
		print 'Email has already been registered.';
		return;
	} 

	// Otherwise, set the session stuff
	else {

		$mysqli->query("INSERT INTO md_users (userEmail, userPassword) VALUES ('$userEmail', '$userPassword')");
		$resultCheck = $mysqli->query("SELECT userId, userEmail FROM md_users WHERE userEmail = '$userEmail' AND userPassword = '$userPassword'");
		$row = $resultCheck->fetch_assoc();
		$_SESSION['id'] = $row['userId'];
		$_SESSION['email'] = $row['userEmail'];
		print 'Success!';

	}

?>