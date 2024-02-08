<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $idType = $_POST["type"];
    $ability = $_POST["ability"];
    $weight = $_POST["weight"];

    try {

        require_once "db.inc.php";
        global $pdo;

        $query = "INSERT INTO pokemons (name, idType, ability, weight) VALUES (?,?,?,?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$name, $idType, $ability, $weight]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {

        die("Erro de conexão: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
}