<?php
    require "conn.php";

    $newTitle = "hello from post one";
    $id = 1;

    //must used together with execute
    $update = $conn->prepare("UPDATE users SET title = :title WHERE id = :id");

    $update->execute(array(
        "title" => $newTitle,
        "id" => $id
    ));