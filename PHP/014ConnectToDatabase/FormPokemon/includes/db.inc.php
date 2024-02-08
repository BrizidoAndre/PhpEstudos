<?php

$dsn = 'mysql:host=localhost;dbname=pokemonform';
$dbusername = "root";
$dbpwd = "";

try {

    $pdo = new PDO($dsn, $dbusername, $dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Erro de conexão: " . $e->getMessage();
}