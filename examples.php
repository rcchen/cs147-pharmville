<?php

    // This file contains examples on how to pull information from the database
    // Full access to the database is available at cs147.adamantinelabs.com/phpmyadmin
    // User name is ccs147rogchen, password is Asdf123$ 
    // Initialize the connection
    include_once('config.php');

    // Pulling a list of all the medications
    print '<h1>List of medications</h1>';

    // Make the query from the medicationdata table
    $result = $mysqli->query("SELECT * FROM md_medicationdata");

    // Fetch each row with fetch_assoc so we can use column names
    while($row = $result->fetch_assoc()) {

        // Here are some of the attributes that can be pulled
        printf("%s (%s)<br />", $row["mdataName"], $row["mdataBrand"]);
        print '<ul>';

        // Checks to see if the cell contains information
        if ($row["mdataSideEffects"] != "") {

            // Data is comma separated, use explode to put it into an array
            $sideEffects = explode(',', $row["mdataSideEffects"]);

            // Loop through the array printing out side effects
            foreach ($sideEffects as $effect) {
                print '<li>' . $effect . '</li>';
            }
        } 

        // Prints this if the cell contains no information
        else {
            print '<li>No side effects in database</li>';
        }

        print '</ul>';

    }
