<?php

	// Provides a simple endpoint to adding a single alarm
	// Takes in three POST parameters:
	// 		alertMed => id of the medication that the alert corresponds to
	//		alertTime => given in HH:MM:SS format
	// 		alertDay => integer from 0-6 demarking which day of the week, 0 = Sunday

	// Include the database connection information from config.php
	include_once('../config.php');

	// Gather the post variables
	$alertMed = $_POST['alertMed'];
	$alertTime = $_POST['alertTime'];
	$alertDay = $_POST['alertDay'];
	$alertUser = $_POST['alertUser'];

	// mySQL query for inserting the data
	$mysqli->query("INSERT INTO md_users_alerts VALUES ('$alertMed', '$alertTime', '$alertDay', '$alertUser'");

?>