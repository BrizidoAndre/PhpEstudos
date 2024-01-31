<?php

$conn = new mysqli("localhost", "root", "", "loginmysql");

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
