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
    <form action="get.php" method="GET">
        <label for="course">Enter your favourite course name: </label>
        <input type="text" name="course">
        <a href="#" onclick="submitForm()">Direct to another page</a>
    </form>

    <script>
    function submitForm() {
        var course = document.querySelector('input[name="course"]').value;
        var lang = 'php'; // You may want to define the language here or fetch it from somewhere

        // Redirect to another page with the language and course parameters
        window.location.href = "get.php?lang=" + lang + "&course=" + course;
    }
    </script>
    
    
</body>
</html>