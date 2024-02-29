<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];

        echo "Username is: $username and my email is: $email";
    }
    else
        echo "No data submitted";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Request Demo 1</title>
</head>
<body>
    <form method="POST" action="post.php" >
        username: <input type="text" name="username" />
        email: <input type="text" name="email" />
        <input type="submit" name="submit" />
    </form>
</body>
</html>