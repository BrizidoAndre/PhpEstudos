<?php

session_start([
    'cookie_path' => '/',
    'cookie_lifetime' => 0,
    'cookie_secure' => true,
    'cookie_httponly' => true,
    'cookie_samesite' => 'lax',
]);

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
} else {

    $username = $_POST["username"];
    $idAccess = $_POST["idAccess"];
    $password = $_POST["password"];

    global $conn;
    require_once 'db.inc.php';

    $verificationQuery = "SELECT * FROM users WHERE username = ?";

    $stmt = $conn->prepare($verificationQuery);

    $stmt->execute([$username]);

    $row = $stmt->get_result();

    $result = $row->fetch_assoc();

    if (is_array($result)) {
        $_SESSION["exist"] = true;
        header("Location: ../index.php");
        die();
    }


    $query = "INSERT INTO users(idAccess, username, password) VALUES (?,?,?)";

    $stmt = $conn->prepare($query);

    $stmt->execute([$idAccess, $username, $password]);

    $conn = null;
    $stmt = null;

//header("Location: ../index.php");
    die();


}
