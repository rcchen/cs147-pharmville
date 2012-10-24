<?php

    // Connect to mongoDB
    $m = new Mongo();
    $db = $m->local;
    $collection = $db->docs;

    // Create some sample data
    $doc = array("name" => "MongoDB",
                "type" => "database",
                "count" => 1,
                "info" => (object)array( "x" => 203, "y" => 102),
                "versions" => array("0.9.7", "0.9.8", "0.9.9")
            );

    // Insert into the DB
    $collection->insert($doc);

    // See if it inserted properly
    $obj = $collection->findOne();
    var_dump($obj);

?>
