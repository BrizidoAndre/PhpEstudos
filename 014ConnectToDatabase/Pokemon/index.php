<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedéx</title>
</head>
<body>
<h1>Welcome trainer!</h1>
<h4>Make sure to login : </h4>
<form action="includes/login.inc.php" method="post">
    <label for="username">Username</label>
    <input id="username" name="username" required type="text">
    <label for="password">Password</label>
    <input id="password" name="password" required type="text">
    <button>Login</button>
</form>

<div>
<h5>Or if you do not have an account. </h5>
<a href="signUp.php">Sign in</a>

</div>




</body>
</html>