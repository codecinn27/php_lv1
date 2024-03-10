<?php

    require "conn.php";

    $id = 3;

    $delete = $conn->prepare("DELETE FROM users WHERE id = :id");
    
    $delete->execute(array(
        "id" => $id
    ));