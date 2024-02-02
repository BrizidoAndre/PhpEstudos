<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySqlImage</title>
</head>
<body>

<h1>Signup</h1>

<form enctype="multipart/form-data" action="includes/formhandler.inc.php" method="post">
    <input required name="username" type="text" placeholder="Username">
    <input required name="password" type="password" placeholder="Password">
    <input required name="image" type="file" accept=".jpg, .jpeg, .png" placeholder="Select a image">

    <button>Signup</button>
</form>


</body>
</html>