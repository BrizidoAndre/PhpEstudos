<?php

//starting session
session_start();

//verifing if session has a user
if (!isset($_SESSION["user"])) {
    header("Location: ./index.php");
}
$user = $_SESSION["user"];

//searching for the list of types
require_once 'includes/db.inc.php';

$query = "SELECT * FROM type";

$rows = mysqli_query($conn, $query);

$types = mysqli_fetch_all($rows, 1);

$rows = null;

//searching for the list of pokemons with the user
$query = "SELECT * FROM pokemons WHERE idUser = ?";

$stmt =$conn -> prepare($query);

$stmt->execute([$user['id']]);

$rows = $stmt -> get_result();

$pokemons = $rows-> fetch_all(1);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of pokemons</title>
</head>
<body>

<h1>Welcome <?php echo htmlspecialchars($user["username"]) ?>!</h1>

<img src="includes/img/<?php echo $user["userimage"]; ?>" alt="">

<form action="includes/formPokehandler.php" method="post" enctype="multipart/form-data">
    <h1>Sign new friends</h1>
    <label for="name">Nome</label>
    <input type="text" id="name" name="name" required>

    <select name="idType" id="" required>
        <option value="" selected hidden="hidden">Please select the type of this pokemon</option>

        <?php
        foreach ($types as $type) {
            echo "<option value='" . $type["id"] . "'>" . $type["name"] . "</option>";
        }
        ?>

    </select>

    <input type="text" hidden="hidden" value="<?php echo $user['id'] ?>" name="idUser">

    <label for="pokeImage">Selecione uma imagem para seu pokemon</label>

    <input type="file" name="pokeImage" id="pokeImage" required>

    <button>Cadastrar pokemón</button>
</form>

<div>
    <h2>Your team:</h2>

    <?php
    foreach ($pokemons as $pokemon) {?>

        <h1><?php echo $pokemon["name"] ?></h1>

        <img src="includes/pokeImg/<?php echo $pokemon["pokePicture"] ?>">;


    <?php }
    ?>

</div>

</body>
</html>