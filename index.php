<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Page Title" ?></title>
</head>
<body>
    <h1>This is a heading </h1>
    <p><?php echo "php rocks"; ?></p>
    <?php
        echo "<h2>Hello World</h2>"; 
        $var = print("hello from var");
        ?>
</br>
<?php

$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: </p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>


</body>
</html>