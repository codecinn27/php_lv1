<?php
    date_default_timezone_set("Asia/Kuala_Lumpur");
    echo date("d-m-Y"). " --- ". date("l"). " --- " .date("h:i:sa"). "<br>";
    session_start();
    session_unset();
    session_destroy();
    echo "Session variables are destroyed";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Session</title>
</head>
<body>
    <br>
    <a href="session2.php">read session page</a>
    <br>
    <a href="session1.php">create session page</a>
    
    
</body>
</html>
