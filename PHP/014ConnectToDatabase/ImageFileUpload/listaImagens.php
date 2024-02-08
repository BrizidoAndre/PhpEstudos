<?php

require_once 'includes/db.inc.php';

$stmt = mysqli_query($conn,"SELECT * FROM imagemmesmo");

$rows = mysqli_fetch_all($stmt,1);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de imagens</title>
</head>
<body>
<h1>Imagens no dados</h1>

<br><br><br>

<?php
foreach ($rows as $row) :

    echo "<h1>"  .$row['nome'] .  "</h1>";
//aqui eu listo todos os meus arquivos e então uso uma propriedade do próprio navegador
//de obter uma imagem codificada e então resolvo meu problema
    echo "<img src='data:image/jpg;base64,". $row['imagen'] . "' />";
endforeach;
?>

</body>
</html>