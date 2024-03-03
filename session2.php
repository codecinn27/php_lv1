<?php
    date_default_timezone_set("Asia/Kuala_Lumpur");
    echo date("d-m-Y"). " --- ". date("l"). " --- " .date("h:i:sa"). "<br>";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Session</title>
</head>
<body>
    <h3>
        <?php
            echo "Name: ".$_SESSION['username'] . "<br>";
            echo "Email: ".$_SESSION['email'];
        ?>
    </h3>
    <br>
    <a href="session1.php">Create Session</a>
    <br>
    <a href="session3.php">Destroy Session</a>
</body>
</html>