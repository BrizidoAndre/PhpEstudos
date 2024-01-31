<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["mail"];

    try {

        require_once "dbh.inc.php";
        global $pdo;

        $query = "UPDATE users SET email = ? WHERE username = ? AND pwd = ?";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$email, $username, $pwd]);

        $stmt = null;
        $pdo = null;

        header("Location: ../index.php");
        die();


    } catch (PDOException $e) {
        die("Error in update: " . $e->getMessage());
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");

}