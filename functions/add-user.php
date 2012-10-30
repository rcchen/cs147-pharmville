<?php

	// Get the email and password POST values
	$userEmail = $_POST['userEmail'];
	$userPassword = $_POST['userPassword'];

	// Hash the password for security purposes
	$userPassword = hash('sha1', $userPassword);

	// Check to see if the user is registered already
	$checkUser = $mysqli->query("SELECT userEmail FROM md_users WHERE email = '$userEmail'");
	if ($checkUser->num_rows > 0) {
		return 'That email is already registered. <a href="forgot-password.php">Forgot password?</a>';
	} 

	// Else, we should insert into the database
	else {
		$mysqli->query("INSERT INTO md_users (userEmail, userPassword) VALUES ('$userEmail', '$userPassword')");
		return 'Successfully registered!';
	}

?>