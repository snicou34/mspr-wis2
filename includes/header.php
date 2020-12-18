<?php include_once 'includes/secure.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Tekkies™</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          crossorigin="anonymous">
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="16x16">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded fixed-top">
    <div class="container-fluid">
        <a href="home.php" style="margin-right: 15px">
            <img src="assets/img/tekkies.png" alt="Ceci est un logo" title="Logo Tekkies" class="logo" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" aria-current="page" href="home.php"><i class="fas fa-home"
                                                                                              style="margin-right: 4px"></i>Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about.php"><i class="fas fa-users"
                                                                                       style="margin-right: 4px"></i>Qui
                        sommes-nous ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-current="page" href="#"><i class="fas fa-bell"
                                                                                 style="margin-right: 4px"></i>Notifications<span class="badge bg-dark" style="margin-left: 5px">Bientôt</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-current="page" href="#"><i class="fas fa-comments"
                                                                                 style="margin-right: 5px"></i>Messages<span class="badge bg-dark" style="margin-left: 5px">Bientôt</span></a>
                </li>
            </ul>
            <li class="navbar-nav ml-auto">
                <button style="background-color: inherit; border: none">
                    <a href="post_c.php" class="btn btn-outline-dark" style="padding: 13px"><i class="fas fa-plus"
                                                                    style="margin-right: 8px"></i>Publier un post</a>
                </button>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="background-color: #E7383C; color: #FFFFFF">

                        <img src="<?php echo $_SESSION['user']['thumbnail'] ?> "
                             style="margin-right: 5px; border-radius: 50%; width: 30px; height: 30px">

                        <?php

                        echo $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'];

                        ?>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">
                            <i class="fas fa-user" style="margin-right: 3px"></i>
                            <span>Mon profil</span>
                        </a>
                        <a class="dropdown-item" href="help.php">
                            <i class="fas fa-question-circle" style="margin-right: 3px"></i>
                            <span>Aide</span>
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="logout.php" style=" color: red"><i class="fas fa-sign-out-alt"
                                                                                          style="margin-right: 5px"></i>Se
                            déconnecter</a>
                    </div>
                </div>
            </li>
        </div>
    </div>


</nav>

