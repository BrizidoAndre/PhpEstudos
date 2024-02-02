<?php

session_start();

require_once "./includes/db.inc.php";

global $conn;

$query = "SELECT * FROM access";

$result = mysqli_query($conn,$query);

$result = mysqli_fetch_all($result,1);

if(!isset($_SESSION["user"])){
    header("Location: ./index.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Seja bem vindo, <?php echo $_SESSION["user"]["username"]?></h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur debitis facere ipsam nesciunt rem. Alias atque
    eligendi, esse exercitationem, in inventore iusto libero mollitia nesciunt possimus provident ratione repudiandae,
    sapiente.</p>

<a href="includes/cleanSessions.inc.php">Log out</a>

<h1>Cadastro de Usuários</h1>

<form action="includes/formhandler.inc.php" method="post">
    <input required name="username" type="text" placeholder="Username">
    <input required name="password" type="password" placeholder="Password">

    <select  name="idAccess" required>
        <option selected value="" hidden>Selecione o tipo de usuário</option>
        <?php
        foreach ($result as $item) {
            echo "<option value=" . $item['id'] . ">" . htmlspecialchars($item['kind']) . "</option>";
        }
        ?>
    </select>

    <button>Signup</button>
</form>
<h1>Exclusão de usuários</h1>
<form action="includes/deleteHandler.inc.php" method="post">
    <input required name="username" type="text" placeholder="Username">
    <button>Delete</button>
</form>
</body>
</html>