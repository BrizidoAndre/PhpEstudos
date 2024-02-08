<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
    die();
}

try {
    require_once 'db.inc.php';

    $name = $_POST["name"];

//    BASTANTE ATENÇÃO AQUI
//    neste instante estou pegando o caminho do arquivo que o usuário subiu e obtendo o arquivo em si
//    o que acontece é que esse arquivo nos retorna uma string. Um texto que depois é codificado pela função do
//    próprio PHP.
    $image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));

    $stmt = $conn->prepare("INSERT INTO imagemmesmo(nome, imagen) VALUES (?,?)");

//    depois eu salvo esse texto codificado no banco
    $stmt->execute([$name, $image]);
//    mais detalhes na página de listagem....

    header('Location: ../index.php');

}catch (mysqli_sql_exception $exception){
    echo "Erro na inserção: " . $exception;
}


