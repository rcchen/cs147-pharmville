<?

	/* File: config.php
	 * ----------------
	 * Created by rogchen on 10/19/12
	 * ----------------
	 * Contains authentication information for the database and opens a database
	 * connection to prepare for queries. include_once('config.php') or wherever
	 * this file is relative to your PHP file at the beginning of your file.
	 */

	// Information for connecting to the mySQL server
	$mysql_server = 'localhost';
	$mysql_user = 'user'; // REPLACE WITH USER
	$mysql_pass = 'password'; // REPLACE WITH PASSWORD
	$mysql_database = 'database'; // REPLACE WITH DATABASE

	// Opens connection to the mySQL server. Throws error if connection failed with message.
	$mysqli = mysqli_connect($mysql_server, $mysql_user, $mysql_pass) or die(mysql_error());

?>	
