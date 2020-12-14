<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Tekkies</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="assets/img/tekkies.png" sizes="16x16">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded fixed-top">
    <div class="container-fluid">
        <a href="index.php" style="margin-right: 6px">
            <img src="assets/img/tekkies.png" alt="Ceci est un logo" title="Logo Tekkies" class="logo" height="50px">
        </a>
        <a class="navbar-brand" href="index.php">Tekkies</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                </li>
                <li class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher sur Tekkies" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Rechercher</button>
                </li>
            </ul>
            <li class="navbar-nav ml-auto">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="background-color: #E7383C; color: #FFFFFF">
                        <img src="assets/img/profile.png" height="30px" style="margin-right: 5px">
                        Sébastien NICOU
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user" style="margin-right: 3px"></i>
                            <span>Voir mon profil</span>
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" style="color: red" href="#"><i class="fas fa-sign-out-alt" style="margin-right: 5px"></i>Se déconnecter</a>
                    </div>
                </div>
            </li>
        </div>
    </div>
</nav>