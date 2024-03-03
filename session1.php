<?php
    /*
    d- represents the day of the month (01 to 31)
    m- represents a month (01 to 12)
    Y- represents a year (in four digits)
    l- represents the day of the week
    h- represents the hour
    i- represents the minutes
    s- represents the seconds
    a- represents am or pm

    */
    date_default_timezone_set("Asia/Kuala_Lumpur");
    echo date("d-m-Y"). " --- ". date("l"). " --- " .date("h:i:sa"). "<br>";
    
    session_start();
    $_SESSION['username'] = "JohnDoe";
    $_SESSION['email'] = "haha@gmail.com";
    echo "<br>";
    echo "Name: ". $_SESSION['username'] . " and Email: " . $_SESSION['email']. "<br>";
    echo "Session variables are set";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session</title>
</head>
<body>
    <br><br>
    <a href="session3.php">Destroy session page</a>
    </br>
    <a href="session2.php">Read session page</a>
</body>
</html>