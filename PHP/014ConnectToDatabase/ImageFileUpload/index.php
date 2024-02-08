<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image file</title>
</head>
<body>
<h1>Upload de imagens</h1>
<a href="listaImagens.php">Clique aqui para visualizar as imagens cadastradas</a>

<form method="post" enctype="multipart/form-data" action="includes/formhandler.inc.php">

    <label for="name">Nome da imagem</label>
    <input name="name" id="name" type="text">

    <label for="image"></label>
    <input type="file" name="image" id="name">

    <button>Inserir arquivo</button>
</form>
</body>
</html>