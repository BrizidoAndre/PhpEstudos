<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$bool = true;
$a = 900;
$b = 4;


if ($a < $b){
    echo "first condition is true";
    echo "<br>";
};


$result = match ($a) {
  1,3,5 => 'Variable is odd',
  2,4,6 => 'Variable is even',
    default => "Variable is out of scopes"
};

echo $result;

?>

</body>
</html>