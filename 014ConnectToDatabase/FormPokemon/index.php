<?php
global $pdo;
try {
    require_once "./includes/db.inc.php";
    $query = "SELECT * FROM type";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;



} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Pokemon!</title>
</head>
<body>

<h1>Pokedex</h1>
<form action="./includes/formhandler.inc.php" method="post">
    <h2>Sign Pokemon</h2>
    <input type="text" name="name" placeholder="Type a name" required>
    <select name="type" required>
        <option selected value="" hidden>Select a type</option>
        <?php
        foreach ($results as $item) {
            echo "<option value=" . htmlspecialchars($item['id']) . ">" . htmlspecialchars($item["element"]) . "</option>";
        }
        ?>
    </select>
    <input type="text" name="ability" placeholder="Type an ability" required>
    <input type="number" name="weight" step="0.1" min="0" placeholder="Type a weight" required>

    <button>Press me</button>
</form>



<form action="./includes/formdelete.inc.php" method="post">
    <h2>Delete Pokemon</h2>
    <input type="text" name="name" placeholder="Type a name" required>
    <button>Delete</button>
</form>


<form action="./searchupdate.php" method="post">
    <h2>Update Pokemon</h2>
    <p>Search for a Pokémon with its username</p>
    <input type="text" name="name" placeholder="Type a name" required>

    <button>Press me</button>
</form>

</body>
</html>