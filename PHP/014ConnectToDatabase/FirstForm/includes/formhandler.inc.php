<?php

global $pdo;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //we are not sanitizing our data because we are not outputting it
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $mail = $_POST["mail"];

    //in this example we are outputting it, so we have to sanitize it
    //echo htmlspecialchars($username);

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email) VALUES (?,?,?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd, $mail]);

//        Reseting the variables for a next use
        $pdo = null;
        $stmt = null;


        header("Location: ../index.php");

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}