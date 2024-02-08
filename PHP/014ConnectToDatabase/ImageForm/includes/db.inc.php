<?php
try {
$conn = mysqli_connect("localhost",'root', '', 'image');

} catch(mysqli_sql_exception $exception){
        echo "Erro de conexão: " . $exception->getMessage();
}