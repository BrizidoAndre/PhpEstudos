<?php


if($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: ../index.php");
    die();
}

$username = $_POST["username"];
$pwd = $_POST["password"];
$image = $_FILES["image"];

print_r($image);