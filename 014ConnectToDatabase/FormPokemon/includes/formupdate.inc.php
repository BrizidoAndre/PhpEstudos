<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $type = $_POST["type"];
    $ability = $_POST["ability"];
    $weight = $_POST["weight"];

    global $pdo;

    try {
        require_once "db.inc.php";

        $query = "UPDATE pokemons SET idType = ?, ability = ?, weight = ? WHERE name = ?";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$type, $ability, $weight, $name]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        die();
    } catch(PDOException $e){
        die("Erro de conexão: " . $e->getMessage());
    }
}
else{
    header("Location: ../index.php");
}