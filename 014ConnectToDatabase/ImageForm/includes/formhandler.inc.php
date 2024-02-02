<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
    die();
}

require_once 'db.inc.php';

$query = "SELECT name FROM images";

$result = mysqli_query($conn, $query);

$results = $result->fetch_all(1);
print_r($result);


$name = $_POST['name'];
$image = $_FILES['image'];

foreach ($results as $result) {
    if (in_array($name, $result)) {
        echo "nome já escolhido";
    }

}


if (isset($image['error']) === 4) {
    echo "Image not included";
} else {
    $fileName = $image['name'];
    $fileSize = $image['size'];
    $tmpName = $image['tmp_name'];

    $validImageExtention = ['jpg', 'jpeg', 'png'];
    $imageExtention = explode('.', $fileName);
    $imageExtention = strtolower(end($imageExtention));

    if (!in_array($imageExtention, $validImageExtention)) {
        echo 'invalid image extention';
    } else if ($fileSize > 1000000) {
        echo 'image too large';
    } else {
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtention;

        move_uploaded_file($tmpName,  'img/' . $newImageName);
        $query = "INSERT INTO images(name, image) VALUES ('$name','$newImageName')";

        mysqli_query($conn, $query);

        header('Location: ../index.php');
    }
}