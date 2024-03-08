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
    $row_body = $conn->query("SELECT body FROM users");
    //method 1
    // while($row = $rows->fetch(PDO::FETCH_ASSOC)){
    //     echo $row['title'] . "<br>";
    // }

    //method 2
    foreach($rows as $row){
        echo $row['title'] . "<br>";
    }
    foreach($row_body as $row){
        echo $row['body'] . "<br>";
    }

    /*
    PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set
    PDO::FETCH_BOTH (default): returns an array indexed by both column name and 0-indexed column number as returned in your result set
    PDO::FETCH_OBJ: returns an anonymous object with property names that correspond to the column names returned in your result set
    PDO::FETCH_LAZY: combines PDO::FETCH_BOTH and PDO::FETCH_OBJ, creating the object variable names as they are accessed
    PDO::FETCH_NUM: returns an array indexed by column number as returned in your result set, starting at column 0
    */