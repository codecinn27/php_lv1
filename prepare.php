<?php
    require "conn.php";

    $title = "This is a title";
    $body = "This is a body";

    //both must work together in order to work together
    $insert = $conn->prepare("INSERT INTO users (title, body) VALUES (:title, :body)");
    $insert->execute(array(
        "title" => $title,
        "body" => $body
    ));