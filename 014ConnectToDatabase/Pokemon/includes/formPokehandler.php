<?php

if ($_SERVER["REQUEST_METHOD"] != 'POST') {
    header("Location: ../pokemon.php");
    die();
}


$name = $_POST["name"];
$type = $_POST["idType"];

$image = $_FILES['pokeImage'];
$idUser = $_POST['idUser'];

try {
    require_once 'db.inc.php';
    $query = "INSERT INTO pokemons(name, idType, idUser, pokePicture) VALUES(?,?,?,?);";

    $imageName = $image["tmp_name"];

    move_uploaded_file($imageName, "pokeImg/" . $image['name']);

    $stmt = mysqli_prepare($conn, $query);

    $stmt->execute([$name, $type, $idUser, $image["name"]]);

    header("location: ../pokemon.php");

    $conn = null;
    $stmt = null;

}catch (mysqli_sql_exception $e){
    echo "Erro de conexão: " . $e;
}
