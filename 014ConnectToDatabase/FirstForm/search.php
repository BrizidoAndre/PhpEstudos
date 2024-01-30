<?php
global $pdo;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["search"];

    try {
        require_once("./includes/dbh.inc.php");

        $query = "SELECT * FROM comments WHERE username = ?";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$search]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;


    } catch (PDOException $e) {
        echo "Erro na busca. " . $e->getMessage();
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Search</title>
</head>
<body>

<h1>Search results:</h1>

<?php
if (empty($results)) {
    echo "<div>";
    echo "<h3>Nenhum valor encontrado!</h3>";
    echo "</div>";
} else {
    foreach ($results as $item) {
        echo "<div>";
        echo "<h3>" . htmlspecialchars($item["username"]) . "</h3>";
        echo "<p>" . htmlspecialchars($item["comment_text"]) . "</p>";
        echo "<p>" . htmlspecialchars(date( "Y-m-d", strtotime($item["created_at"]))) . "</p>";
        echo "</div>";
    }
}
?>

</body>
</html>