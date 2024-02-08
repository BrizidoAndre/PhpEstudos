<?php

if ($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: ../index.php");
    die();
}

try {

require_once 'db.inc.php';

$query = 'INSERT INTO users(username, pwd, userimage, idFavType, idType) VALUES (?,?,?,?,2)';

$username = $_POST['username'];
$password = $_POST['password'];
$favType = $_POST['type'];


$userimage = $_FILES['userimage'];
$userimageName = $userimage['name'];



$imageInsert = "img/" . $userimageName;

move_uploaded_file($userimage['tmp_name'], $imageInsert);

$stmt = $conn->prepare($query);
$stmt->execute([$username, $password, $userimageName, $favType]);
header("Location: ../index.php");

$conn = null;
$stmt = null;

} catch (mysqli_sql_exception $exception){
    echo "Erro na insert : " . $exception;
}
