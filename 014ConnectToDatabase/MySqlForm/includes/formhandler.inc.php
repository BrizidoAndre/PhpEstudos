<?php

if ($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: ../index.php");
}
else{

$username = $_POST["username"];
$idAccess = $_POST["idAccess"];
$password = $_POST["password"];

global $conn;
require_once 'db.inc.php';
$query = "INSERT INTO users(idAccess, username, password) VALUES (?,?,?)";

$stmt = $conn->prepare($query);

$stmt->execute([$idAccess, $username, $password]);

$conn =null;
$stmt = null;

header("Location: ../index.php");
die();
}