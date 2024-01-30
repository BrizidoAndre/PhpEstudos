<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];


    try {
        global $pdo;
//        BUSCANDO O POKEMON ESPECÍFICO
        require_once('./includes/db.inc.php');
        $query = "SELECT * FROM pokemons LEFT JOIN type ON type.id = pokemons.idType WHERE name = ? ";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = $results[0];

//      BUSCANDO OS TIPOS DE ELEMENTO
        $query = "SELECT * FROM type";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $types = $stmt->fetchAll(PDO::FETCH_ASSOC);

//        retirando os valores das variáveis

        $stmt = null;
        $pdo = null;

    } catch (PDOException $e){
        die("Erro na procura: " . $e->getMessage());
    }

} else {
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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<form action="./includes/formupdate.inc.php" method="post">
    <h2>Update Pokemon</h2>
    <p>Search for a pokemon with its username</p>
    <input type="text" name="name" placeholder="Type a name"  value="<?php echo htmlspecialchars($result["name"]) ?>" required>
    <select name="type" required>
        <option selected value="<?php echo htmlspecialchars($result["idType"]) ?>" hidden><?php echo htmlspecialchars($types[$result["idType"] - 1]["element"]) ?></option>
        <?php
        foreach ($types as $item) {
            echo "<option value=" . htmlspecialchars($item['id']) . ">" . htmlspecialchars($item["element"]) . "</option>";
        }
        ?>
    </select>
    <input type="text" name="ability" placeholder="Type an ability" value="<?php echo htmlspecialchars($result["ability"]) ?>" required>
    <input type="number" name="weight" step="0.1" min="0" placeholder="Type a weight"  value="<?php echo htmlspecialchars($result["weight"]) ?>" required>

    <button>Press me</button>
</form>

</body>
</html>