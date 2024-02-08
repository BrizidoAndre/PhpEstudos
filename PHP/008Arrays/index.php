<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

<?php
$fruits = ["apple", "pear", "banana", "cherry"];
$animals = [
    'dog',
    'cat',
    'mouse',
    'crab'];

//    completely removing the element banana
unset($fruits[2]);

//    removing the element and organizing the array
array_splice($animals, 1, 2);

echo $animals[1];


$family = [
    "dog1" => "Maya",
    "dog2" => "Luna",
    "brother" => "Arthur",
    "dad" => "Daniel",
    "mom" => "Patricia",
    "me" => "André"
];

echo "<br>";

echo $family['dog1'];

echo "<br>";
print_r($family);
echo "<br>";
echo count($family);

echo "<br>";
sort($family);
print_r($family);

echo "<br>";
$family["grandma"] = "Angélica";
print_r($family);

echo "<br>";
array_splice($family,4,0,"grandpa");
print_r($family);

$food = [
        ["hotdog", "sausage"],
    "rice",
    "beans",
    "sauce"
];
echo "<br>";echo "<br>";echo "<br>";
echo $food[0][1];
?>
</body>
</html>