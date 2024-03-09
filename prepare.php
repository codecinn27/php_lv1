<?php
    require "conn.php";
    $insert = $conn->prepare("INSERT INTO users (title, body) VALUES (:title, :body)");