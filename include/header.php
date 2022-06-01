<?php
require_once('init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<header class="header-area overlay">
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bolder" href="index.php">LOKISALLE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active fw-semibold" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link fw-normal" href="#">Contact</a>
            </li>
        <?php if (!internauteConnecteAdmin() && !internauteConnecte()) : ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-normal" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Espace Membre
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="inscription.php">Inscription</a></li>
                <li><a class="dropdown-item" href="connexion.php">Connexion</a></li>
                <li><a class="dropdown-item" href="#">Réservation</a></li>
            </ul>
            </li>
        <?php endif ; ?>
        <?php if (internauteConnecte()) : ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-normal" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Espace
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="profil.php">Profil</a></li>
                <li><a class="dropdown-item" href="<?= URL ?>connexion.php?action=deconnexion">Déconnexion</a></li>
                <li><a class="dropdown-item" href="#">Réservation</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link fw-normal" href="./admin/index.php">Admin</a>
            </li>
        <?php endif ; ?>
        </ul>
        </div>
    </div>
    </nav>
</header>

<main class="container" style="height: 100vh ;">


