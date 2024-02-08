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
$query = "SELECT * ,pokemons.name as nome FROM pokemons LEFT JOIN type ON type.id = pokemons.idType WHERE idUser = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$user['id']]);
$rows = $stmt->get_result();
$pokemons = $rows->fetch_all(1);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="pokeStyles.css">
    <title>List of pokemons</title>
</head>
<body>

<header>
    <h1>Welcome <?php echo htmlspecialchars($user["username"]) ?>!</h1>

    <div class="sGap">
        <a href="includes/logOut.inc.php">Log Out</a>

        <img src="includes/img/<?php echo $user["userimage"]; ?>" alt="">
    </div>

</header>

<main>

    <form action="includes/formPokehandler.php" method="post" enctype="multipart/form-data">
        <h1>Sign new friends</h1>
        <label for="name">Name</label>
        <input placeholder="Your pokemon's name" type="text" id="name" name="name" required>

        <select name="idType" id="" required>
            <option value="" selected hidden="hidden">The pokemon's type</option>

            <?php
            foreach ($types as $type) {
                echo "<option value='" . $type["id"] . "'>" . $type["name"] . "</option>";
            }
            ?>

        </select>

        <input type="text" hidden="hidden" value="<?php echo $user['id'] ?>" name="idUser">

        <label for="pokeImage">Select your Pokemon's Image</label>

        <input type="file" name="pokeImage" id="pokeImage" required>

        <button>Sign Pokémon</button>
    </form>

</main>
<div class="teamContainer">
    <h1>Your team:</h1>

    <?php
    foreach ($pokemons as $pokemon) { ?>

        <div class="container">

            <div class="card">
                <div class="pokemonCard">
                    <h1><?php echo $pokemon["nome"] ?></h1>

                    <img src="includes/pokeImg/<?php echo $pokemon["pokePicture"] ?>">
                </div>
                <div class="backCard">
                    <h2>Name:</h2>
                    <h3><?php echo $pokemon["nome"] ?></h3>
                    <h2>Type</h2>
                    <h3><?php echo $pokemon["name"] ?></h3>
                    <h2>Pokedéx number:</h2>
                    <h3><?php echo $pokemon["id"] ?></h3>

                </div>
            </div>

        </div>
    <?php }
    ?>

</div>

</body>
</html>