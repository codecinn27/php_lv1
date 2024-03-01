<?php
    if(isset($_GET['lang']) AND isset($_GET['course'])){
        echo "Language is: ".$_GET['lang'] . "<br>";
        echo "Course is: ".$_GET['course'];
    }
    else
        echo "No data submitted";
?>