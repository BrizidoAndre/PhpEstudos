<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];

    try {
        require_once "db.inc.php";
        global $pdo;

        $query = "DELETE FROM pokemons WHERE name = ?";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$name]);

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