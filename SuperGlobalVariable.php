<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Usando variáveis superglobais</h1>

    <?php
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // Coloque na url o seguinte texto
    // http://localhost/FirstProject/SuperGlobalVariable.php?name=André
    echo $_GET["name"];
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Aqui são dados que guardamos dentro da session do navegador
    $_SESSION["username"] = "batatinha";
    echo $_SESSION["username"];
    ?>




    <!-- Uma coletânea de variáveis globais -->
    <?php
    $_SERVER[""];
    $_GET[""];
    $_POST[""];
    $_REQUEST[""];
    $_FILES[""];
    $_COOKIE[""];
    $_SESSION[""];
    $_ENV[""];

    ?>
</body>

</html>