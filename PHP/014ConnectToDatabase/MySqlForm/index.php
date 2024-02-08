<?php

session_start();

require_once "./includes/db.inc.php";
if (isset($_SESSION["role"])) {
    if ($_SESSION["role"] === "Admin") {
        header("Location: ./adminPage.php");
        die();
    } else if ($_SESSION["role"] === "Comum") {
        header('Location: ./comumPage.php');
        die();
    }
}



$query = "SELECT * FROM access";

global $conn;

$result = mysqli_query($conn, $query);

$access = $result->fetch_all(MYSQLI_ASSOC);

$title = 'titulo';


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>MySql</title>
</head>
<body>

<h1>Signup</h1>

<form enctype="multipart/form-data" action="includes/formhandler.inc.php" method="post">
    <input required name="username" type="text" placeholder="Username">
    <input required name="password" type="password" placeholder="Password">

    <select  name="idAccess" required>
        <option selected value="" hidden>Selecione o tipo de usuário</option>
        <?php
        foreach ($access as $item) {
            echo "<option value=" . $item['id'] . ">" . htmlspecialchars($item['kind']) . "</option>";
        }
        ?>
    </select>

    <button>Signup</button>
</form>
<?php
if(isset($_SESSION["exist"]))
    echo "<h3>User already exists!</h3>";
        $_SESSION["exist"] = null;
?>

<h1>Login</h1>

<form action="includes/login.inc.php" method="post">
    <input required name="username" type="text" placeholder="Username">
    <input required name="password" type="password" placeholder="Password">

    <button>Login</button>
</form>

<?php
if(isset($_SESSION["tried"]))
    echo "<h3>User not found!</h3>";
    $_SESSION["tried"] = null;
?>

<a href="includes/cleanSessions.inc.php">Clean Sessions</a>


</body>
</html>