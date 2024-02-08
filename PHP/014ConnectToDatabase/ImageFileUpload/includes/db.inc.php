<?php


try {
    $conn = mysqli_connect("localhost", 'root', '', 'imagens');
} catch(mysqli_sql_exception $e ){
    echo "Erro de conexão " . $e;
}