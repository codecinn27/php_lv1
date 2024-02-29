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

<?php
  $x =0;
  while($x <= 10){
    echo "The number is: $x <br>";
    $x++;
  }
?>

<?php
  echo "<br>";
  for($x = 0; $x <= 10; $x++){
    echo "The value is: $x <br>";
  }
?>

</br>

<?php
// Associative Array
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  foreach($age as $key => $value){
    echo "My name is:" . $key. " my age is: " . $value;
    echo "<br>";
  }

?>

</br>
<?php
  function helloG($first , $last){
    echo "Hello $first $last";
  }
  helloG("John", "Doe");
?>
</body>
</html>