<?php

try {
    $conn = mysqli_connect("localhost", 'root', '', 'pokemon');

}catch(mysqli_sql_exception $e){
    echo "Erro de conexão " . $e->getMessage();
}
