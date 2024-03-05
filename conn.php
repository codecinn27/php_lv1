<?php

    $host = "localhost";
    $dbname = "blogpost";
    $user = "root";
    $password = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    // $conn = connection
    if($conn == true){
        echo "database connected successfully";
    }else{
        echo "database not connected";
    }