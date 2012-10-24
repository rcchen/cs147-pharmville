<?php

    // This file contains examples on how to pull information from the database
    // Initialize the connection
    include_once('config.php');

    // Pulling a list of all the medications
    print '<h1>List of medications</h1>';
    $result = $mysqli->query("SELECT * FROM md_medicationdata");
    while($row = $result->fetch_assoc()) {
        printf("%s (%s)<br />", $row[mdataName], $row[mdataBrand]);
        print '<ul>';
        if ($row[mdataSideEffects] != "") {
            $sideEffects = explode(',', $row[mdataSideEffects]);
            foreach ($sideEffects as $effect) {
                print '<li>' . $effect . '</li>';
            }
        } else {
            print '<li>No side effects in database</li>';
        }
        print '</ul>';
    }
