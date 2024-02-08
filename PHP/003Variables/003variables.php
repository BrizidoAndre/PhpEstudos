<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>

<body>
    <p>This is a<?php echo "n amazing" ?> paragraph</p>

    <?php echo "This is also a paragraph"; ?>

    <br>
    <p>Testando variável de string</p>
    <?php
    $name = "André Basilio";
    echo $name;
    ?>

    <p>Testando array de strings</p>
    <?php
    $names = ["Andre", "Arthur", "Daniel", "Patricia"];
    foreach ($names as $key => $value) {
        echo $key;
        echo $value;
    };
    ?>

    <?php 
    // Criando uma variável e não dando um valor a ela
    $variavel;
    // Nunca faça isso, causa grandes chances de erro

    // Em vez disso coloque um valor padrão para ela
    $string = "";
    $int = 0;
    $float = 0;
    $bool = false;

    $array = [];
    $object = null;

    ?>

    <p>Olá meu nome é <?php echo $name;?> e estou aprendendo PHP! </p>

    <a href="./SuperGlobalVariable.php">Next Lesson</a>
</body>

</html>