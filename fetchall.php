<?php
    require "conn.php";
    $data = $conn->query("SELECT * FROM users");

    $all = $data->fetchALL(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($all);
    echo "</pre>";

    echo $all[0]['title'];