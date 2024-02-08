<?php
session_start();

//this one delete one specific session
unset($_SESSION["username"]);

//this one delete all session data
session_unset();

//unset the session data on the server
session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example</title>
</head>
<body>

<?php
echo $_SESSION["username"]
?>

</body>
</html>