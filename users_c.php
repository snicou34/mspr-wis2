<?php
include_once 'includes/helpers.php';
$users=getUsers();
?>
<link rel="stylesheet" href="assets/css/app.css">
<link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="16x16">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" crossorigin="anonymous">
<title>Créer mon compte - Tekkies™</title>

    <section>
        <div class="container col-6 mx-auto">
            <div class="text-center">
                <img src="assets/img/tekkies.png" style="margin-top: 15px; height: 125px; ">
            </div>
            <h1 class="font-weight-bold text-center mt-4">Bienvenue sur Tekkies™</h1>
            <div class="font-italic text-center mt-3">
                <p>Partagez votre passion des Sneakers !</p>
                <p>Entrez en relation avec d'autres passionnés dès maintenant !</p>
            </div>

        </div>
    </section>

    <section class="col-4 mx-auto mt-2">
        <div class="container">
            <form action="store_user.php" method="POST">

                <div class="form-group">
                    <label for="thumbnail">Votre photo de profil</label>
                    <input type="text" id="thumbnail" name="thumbnail" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="first_name">Votre prénom</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Votre nom</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Votre adresse email</label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="birthday">Votre date de naissance </label>
                    <input type="date" id="birthday" name="birthday" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="city">Votre ville </label>
                    <input type="text" id="city" name="city" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="phone_number">Votre numéro de téléphone </label>
                    <input type="number" id="phone_number" name="phone_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password">Votre mot de passe</label>
                    <input type="text" id="password" name="password" class="form-control" required>
                </div>

                <button class="btn mb-3 mt-4" style="background-color: #E7383C; color: #FFFFFF; width: 300px; display: block; margin: auto" type="submit">
                    Créer mon compte
                </button>

                <p class="text-center fw-bold">OU</p>

                <button class="mb-3 mt-3" style="background-color: inherit; border: none; display: block; margin: auto">
                   <a href="index.php" class="btn" style="background-color: #E7383C; color: #FFFFFF; width: 300px">J'ai déjà un compte</a>
                </button>

            </form>

        </div>

    </section>

<?php include_once 'includes/footer1.php'; ?>