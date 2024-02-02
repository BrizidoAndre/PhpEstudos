<?php

require_once 'includes/db.inc.php';

$query = 'SELECT * from type';

$results = mysqli_query($conn, $query);

$results = $results->fetch_all(1);

$conn = null;


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PokeCadastro</title>
</head>
<body>
<h1>Cadastro de novo usuário</h1>
<form method="post" enctype="multipart/form-data" action="includes/formhandler.inc.php">
    <label for="username">Type a username</label>
    <input name="username" type="text" id="username" placeholder="Username">
    <label for="password">Type a password</label>
    <input name="password" type="password" id="password" placeholder="Password">
    <label for="image">Insert a userface</label>
    <input type="file" id="image" name="userimage">
    <select name="type" id="type">
        <option value="" selected hidden>Select a type</option>
        <?php
        foreach ($results as $result) {
            echo "<option value='" . htmlspecialchars($result["id"]) . "'>" . htmlspecialchars($result["name"]) . "</option>";
        }
        ?>
    </select>
    <button>Sign up</button>
</form>
</body>
</html>