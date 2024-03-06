<?php



    try{
        $host = "localhost";
        $dbname = "blogpost";
        $user = "root";
        $password = "";
    
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    // // $conn = connection
    // if($conn == true){
    //     echo "database connected successfully";
    // }else{
    //     echo "database not connected";
    // }

    /*If you exclude PDO::FETCH_ASSOC, PDO will return the data in a different format. 
    By default, it returns data as both an associative and numeric array, with keys being 
    both column names and numeric indexes. This can make your code less readable if 
    you're only interested in associative arrays. */
    $rows = $conn->query("SELECT title FROM users");
    while($row = $rows->fetch(PDO::FETCH_ASSOC)){
        echo $row['title'] . "<br>";
    }