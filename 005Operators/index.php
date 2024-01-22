<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operators</title>
</head>
<body>


<?php

//Operadores string
$a = "Hello";
$b = "World!";
// Concatena duas variáveis em um único texto
$c = $a . " " . $b;

echo $c;
echo "<br>";
?>

<?php
//Operadores aritméticos
echo 2 + 3;//adição
echo "<br>";
echo 2 - 3;//subtração
echo "<br>";
echo 2 * 3;//multiplicação
echo "<br>";
echo 2 / 3;//divisão
echo "<br>";
echo 2 % 3;//modular
echo "<br>";
echo 2 ** 3;//potência
?>

<?php
//Operadores de atribuição

$d = 2;
$d += 12;

echo "<br>";
echo "<br>";
echo $d;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>


<?php
// Operadores lógicos

$e = 3;
$f = 4;

if ($e < $f and $a != $b){
    echo "This statement is true";
}
elseif($e < $f or $a != $b){
    echo "is a little true";
}
else{
    echo "is completely false";
}

?>

</body>
</html>