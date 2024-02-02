<?php

require_once 'includes/db.inc.php';

$query = 'SELECT * FROM images';

$results = mysqli_query($conn, $query);

$results = $results->fetch_all(1);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css"
    <title>Document</title>
</head>
<body>
<h1>Formulário de cadastro de imagens</h1>

<form enctype="multipart/form-data" method="post" action="includes/formhandler.inc.php">
    <input type="text" name="name" required>
    <input type="file" name="image" required>
    <button>Cadastrar Imagem</button>

    <br>
    <br>
    <br>

    <?php

    foreach ($results as $result) {
        echo "<h3>" . $result['name'] . "</h3>";
        echo "<br>";
        echo "<img src='includes/img/" . $result["image"] . "'>";
    }
    ?>
</form>
</body>
</html>