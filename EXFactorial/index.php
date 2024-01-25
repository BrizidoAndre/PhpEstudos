<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatorial</title>
</head>
<body>
<form method="post">
    <label for="fator">Insira o numero a ser calculado</label>
    <input name="fator" type="number" min="0" required>
    <button>Calcular</button>
</form>


<?php

$fator = (int)$_POST["fator"];

$error = false;
$total= 1;

for ($i = 1; $i <= $fator; $i++) {
    $total = $total * $i;
}

echo "O total do valor fatoriado é $total"
?>
</body>
</html>