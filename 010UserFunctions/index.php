<?php
declare(strict_types = 1);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
</head>
<body>
<?php

function sayHello()
{
    $count = 0;

    while ($count < 5) {
        print "Hello World";
        print "<br>";
        $count ++;

    }

        print "<br>";
        print "<br>";
        print "<br>";

}

sayHello();


//we can type the kind of parameter we get in the function
function sayName(string $name = "Arthur")
{
    $count = 0;

    while ($count < 5) {
        print $name;
        print "<br>";
        $count ++;

    }
}

//note if we do not put a value in the name parameters, it takes the default value arthur
sayName();

//if we specify, we have the new value give to it
sayName("André");

//we can not have other kind of value instead of string
sayName("123");


function calculator(int $n1, int $n2)
{
    return $n1 + $n2;
}

    echo calculator( 2,5);

?>
</body>
</html>