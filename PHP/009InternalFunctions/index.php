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

$word = "palavra";
//count the number of characters
echo strlen($word);
echo"<br>";
echo"<br>";

$quest = "Find the ? question mark. ? IT IS ? HERE";
//finding the exact location of the especified text
echo strpos($quest,"?");
echo"<br>";
echo"<br>";

//ovewriting a searched text with something we want
echo str_replace("?","!", $quest);
echo"<br>";
echo"<br>";

//turning every character to lower case
echo  strtolower($quest);
echo"<br>";
echo"<br>";
//turning every character to upper case
echo  strtoupper($quest);
echo"<br>";
echo"<br>";

//we can use a negative number to always specify the last characters of a string
echo substr($quest, 24,-2);
echo"<br>";
echo"<br>";


$words = explode("?",$quest, 3);

print_r($words);


?>


</body>
</html>