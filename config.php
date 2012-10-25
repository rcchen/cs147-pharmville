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
	$mysql_user = 'ccs147rogchen';
	$mysql_pass = 'Asdf123$';
	$mysql_database = 'c_cs147_rogchen';

	// Opens connection to the mySQL server. Throws error if connection failed with message.
    $mysqli = mysqli_connect($mysql_server, $mysql_user, $mysql_pass, $mysql_database);

    // Throw error with failed connection
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

?>	
