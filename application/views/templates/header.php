<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titulo ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="p-2 my-3 bg-light text-dark">
    <div class="card col-md-8 container-fluid mt-2 card py-1">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/usuario">Cadastrar Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/produtos">Cadastrar Produtos</a>
            </li>
            <?php if (isset($_SESSION['logado'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/login/logout">Logout</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link disabled">Logout</a>
                </li>
            <?php endif; ?>

        </ul>
    </div>