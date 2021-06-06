<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Livros</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Lista de livros</h1>
        </div>
        <ul class="list-group">
            <?php foreach ($livros as $livro):?>
                <li class="list-group-item"><?= $livro; ?></li>
            <?php endforeach;?>
        </ul>
    </div>
</body>
</html>