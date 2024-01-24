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

    $test = "André";

    echo $test;

    function sayHi()
    {
        global $test;
//        or i can use to get the same variable
        $GLOBALS["test"];

        /*note i only can use my other variable if i call it global*/
        $hi = "hello" . $test;

        return $hi;

    }

    echo sayHi();

    echo "<br>";
    echo "<br>";
    echo "<br>";

    function increment()
    {
//        static makes this variable able to share its value between functions
        static $number = 0;
        $number++;

        echo $number;
    }

    increment();
    echo "<br>";
    increment();

    ?>
</body>
</html>