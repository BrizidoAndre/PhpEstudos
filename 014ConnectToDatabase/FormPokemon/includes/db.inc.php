<?php

$dsn = 'mysql:host=localhost;dbname=pokemon';
$dbusername = "root";
$dbpwd = "Senhaexemplo";

try {

    $pdo = new PDO($dsn, $dbusername, $dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Erro de conexão: " . $e->getMessage();
}