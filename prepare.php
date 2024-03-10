<?php
    require "conn.php";

    $title = "This is a title";
    $body = "This is a body";

    //both must work together in order to work together, prepare and execute
    // insert data into database
    //query for selecting data
    //prepare to do insert update and delete
    $insert = $conn->prepare("INSERT INTO users (title, body) VALUES (:title, :body)");
    $insert->execute(array(
        "title" => $title,
        "body" => $body
    ));