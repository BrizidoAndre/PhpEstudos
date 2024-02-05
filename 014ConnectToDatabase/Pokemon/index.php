<?php

session_start();

if (isset($_SESSION['user'])) {
    header("Location: ./pokemon.php");
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
    <title>Pokedéx</title>
</head>
<body>
<header>
    <h1>P O K É M O N</h1>
</header>

<main>
    <h3>Make sure to login : </h3>
    <form action="includes/login.inc.php" method="post">
        <label for="username">Username</label>
        <input id="username" name="username" required type="text">
        <label for="password">Password</label>
        <input id="password" name="password" required type="password">
        <?php
        if(isset($_SESSION['try'])){
            echo "<h3>Username or password do not match</h3>";
        }
        ?>
        <button>Login</button>
    </form>

</main>
<footer>
    <div>
    <h3>Or if you do not have an account. </h3>
    <a href="signUp.php">Sign in</a>
    </div>
</footer>

</body>
</html>