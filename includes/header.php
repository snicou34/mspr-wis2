<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Tekkies</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="icon" type="image/png" href="assets/img/tekkies.png" sizes="16x16">
</head>

<body>
<header class="col-md-26 col-lg-12 navbar-light bg-white fixed-top shadow-sm" id="header">
    <nav class="navbar navbar-expand-lg">
        <a href="index.php" class="mr-4">
            <img src="assets/img/tekkies.png" alt="Ceci est un logo" title="Logo Tekkies" style="height: 50px; margin-left: 8px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="./index.php"><i class="fas fa-home mr-2"></i>Accueil</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="./career.php"><i class="fas fa-address-card mr-2"></i>Mon parcours</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="./education.php"><i class="fas fa-university mr-2"></i>Ma formation</a>
                </li>
                <li class="nav-item active font-weight-bold">
                    <a class="nav-link" href="./projects.php"><i class="fas fa-layer-group mr-2"></i>Mes projets</a>
                </li>
                <li class="nav-item active font-weight-bold">
                    <a class="nav-link" href="./contact.php"><i class="fas fa-handshake mr-2"></i>Me contacter</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <div class="btn-group">
                    <button type="button" class="btn rounded-pill dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="background-color: #1E1E1E; color: #FFFFFF">
                        <i class="fas fa-globe mr-2" style="color: #FFFFFF"></i>Victor Grollier
                    </button>
                    <div class="dropdown-menu rounded-pill">
                        <a class="dropdown-item" href="#">Mon profil</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</header>