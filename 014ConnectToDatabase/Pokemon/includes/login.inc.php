<?php

if($_SERVER["REQUEST_METHOD"] != 'POST'){
    header("Location: ../index.php");
    die();
}

session_start();

try {

require_once 'db.inc.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = ? AND pwd = ?";

$stmt = mysqli_prepare($conn, $query);

$stmt->execute([$username, $password]);

$response = $stmt->get_result();

$info = $response->fetch_assoc();

$_SESSION['user'] = $info;

header("Location: ../pokemon.php");

$stmt = null;
$conn = null;

}catch(mysqli_sql_exception $e){
    echo "Erro de inserção: " . $e;
}
