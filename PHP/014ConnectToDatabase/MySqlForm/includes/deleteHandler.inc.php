<?php

if($_SERVER['REQUEST_METHOD'] != "POST"){
    header("Location: ../index.php");
    die();
}

$username = $_POST["username"];
try {

require_once 'db.inc.php';

$query = "DELETE FROM users WHERE username = ?";


$stmt = mysqli_prepare($conn, $query);

mysqli_stmt_execute($stmt,[$username]);
header("Location: ../index.php");
}catch(mysqli_sql_exception $e){
    echo 'Erro de deleção: ' . $e;
}

?>