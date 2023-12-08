<?php

session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['id_usuario'])) {
    // Se não estiver autenticado, redireciona para a tela de login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h1>

<!DOCTYPE html>
<html>
<head>
    <title>Página inicial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #cor {
            background-color: #FF7F00;
        }

        .card {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <nav id="cor" class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">Concessionária iffar</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 justify-container-center">
        <h2>Bem-vindo ao menu</h2>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Carro</h5>
                        <p class="card-text">Cadastre o seu carro</p>
                        <a href="carro/index.html" class="btn btn-danger">Listagem de carros</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Moto</h5>
                        <p class="card-text">Cadastre sua moto</p>
                        <a href="moto/index.html" class="btn btn-danger">Listagem de motos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Caminhão</h5>
                        <p class="card-text">Cadastre seu caminhão</p>
                        <a href="caminhao/index.html" class="btn btn-danger">Listagem de caminhões</a>
                    </div>
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
