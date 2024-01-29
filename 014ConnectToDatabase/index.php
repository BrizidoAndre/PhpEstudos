<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoginMySql</title>
</head>
<body>
    <h1>Signup</h1>

    <form action="includes/formhandler.inc.php" method="post">
        <input required name="username" type="text" placeholder="Username">
        <input required name="pwd" type="password" placeholder="Password">
        <input required name="mail" type="email" placeholder="E-Mail">
        <button>Signup</button>
    </form>
</body>
</html>