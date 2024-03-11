<?php
    require "conn.php";

    $data = $conn->query("SELECT * FROM users");

    //1
    print_r($data->rowCount());

    //2
    if($data->rowCount() > 0){
        echo "</br>";
        echo "There are rows in the table";
        while($row = $data->fetch(PDO::FETCH_ASSOC)){
            echo "</br>";
            echo $row['title'];
        }
    }else{
        echo "</br>";
        echo "There are no rows in the table";
    }