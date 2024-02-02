<?php

//initiating a session and setting some parameters
session_start( [
    'cookie_path' => '/',
    'cookie_lifetime' => 15,
    'cookie_secure' => true,
    'cookie_httponly' => true,
    'cookie_samesite' => 'lax',
] );


if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
    die();
}

function redirectUser(string $value)
{
    if ($value === "Admin") {
        $_SESSION["role"] = $value;
        header("Location: ../adminPage.php");
        die();
    } else if ($value === "Comum") {
        $_SESSION["role"] = $value;
        header('Location: ../comumPage.php');
        die();
    } else {
        header('Location: ../notFoundPage.php');
    }
}

$username = $_POST["username"];
$pwd = $_POST["password"];

require_once "db.inc.php";
global $conn;

$query = "SELECT * FROM users LEFT JOIN access ON access.id = users.idAccess WHERE username = ? AND password = ?";


$stmt = $conn->prepare($query);

$stmt->execute([$username, $pwd]);

$row = $stmt->get_result();

$user = $row->fetch_assoc();

$conn = null;
$stmt = null;

if(is_null($user)){
    header("Location: ../index.php");
    $_SESSION["tried"] = true;
}

$_SESSION["user"] = $user;

redirectUser($user["kind"]);