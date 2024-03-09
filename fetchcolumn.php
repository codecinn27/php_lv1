<?php
    require "conn.php";
    $data = $conn->query("SELECT * FROM users");

    $one = $data->fetchColumn(1);
    echo $one;

    