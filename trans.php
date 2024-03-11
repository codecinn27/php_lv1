<?php

    require "conn.php";

    // 15- transaction, commits, roolbacks
    
    try{
        /* PDO::ATTR_ERRMODE: This parameter specifies the attribute being set.
         In this case, it's the error handling mode attribute.
         PDO::ERRMODE_EXCEPTION, it indicates that PDO should throw exceptions if errors occur, 
         rather than silently returning error codes.
         */
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //use beginTransaction() to start a transaction
        //if any query fails, the transaction will be rolled back, the error message will be printed, and the connection will be closed
        //if all queries are successful, the transaction will be committed
        //use commit() to save the changes
        //without the transaction, if any query fails, the changes will be saved and committed into the database
        $conn->beginTransaction();
        $conn->query("INSERT INTO users (title, body) VALUES ('title 1', 'body 1')");
        $conn->query("INSERT INTO users (title, body) VALUES ('title 2', 'body 2')");
        $conn->commit();
    }catch(Exception $e){
        $conn->rollBack();
        //print out the error message
        echo $e->getMessage();
        //close your connection to the database
        $conn = null;
    }