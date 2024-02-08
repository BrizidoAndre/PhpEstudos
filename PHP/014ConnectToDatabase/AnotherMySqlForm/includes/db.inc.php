<?php

$host = "localhost";
$dbname = "mysqlimage";
$user = "root";
$pwd = "";

$conn = mysqli_connect($host,$user,$pwd,$dbname);

if($conn->connect_error){
    die("Connection failed " . $conn->connect_error);
}