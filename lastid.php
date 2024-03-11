<?php
    require "conn.php";
    $title = "title ten";
    $body = "body ten";

    $insert = $conn->prepare("INSERT INTO users (title, body) VALUES (:title, :body)");
    $insert->execute(array(
        "title" => $title,
        "body" => $body
    ));

    echo ($conn->lastInsertId());