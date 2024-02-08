<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>
</head>
<body>

<?php

for ($i = 0; $i < 10; $i++) {
    echo "repeating for the " . $i + 1 . " time";
    echo "<br>";
}


$fruits = ["Apple", "Banana", "Orange"];


foreach ($fruits as $fruit) {
    echo $fruit . " is a delicious fruit";
    echo "<br>";
}

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo "<br>";

}

$fruitColor = ["Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange"];
foreach ($fruitColor as $item => $color) {
    echo "This is a " . $item . ", that has a color of " . $color . "<br>";
  }

?>

</body>
</html>