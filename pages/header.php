<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificados</title>

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- boostrap css v0.0 -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Classificados</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                    <li><a href="meus-anuncios.php">Meus anúncios</a></li>
                    <li><a href="sair.php">Sair</a></li>
                <?php else: ?>
                    <li><a href="cadastre-se.php">Cadastre-se</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>