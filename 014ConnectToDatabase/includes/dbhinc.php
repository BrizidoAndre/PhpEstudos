<?php
//these strings are for conecting the website to the database
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "Senhaexemplo";

try {
//    pdo is the variable responsible for conecting the site to the database
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} //in case of error
catch (PDOException $e) {
    echo "Connection failed: " . $e -> getMessage();
}


