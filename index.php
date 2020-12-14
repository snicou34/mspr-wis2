<link rel="stylesheet" href="assets/css/app.css">

    <section>
        <div class="container col-6">
            <img src="assets/img/tekkies.png" style="margin-left: 15px; margin-top: 15px; height: 50px; display: block; align-content: center">
            <h1 class="font-weight-bold text-center mt-4">Bienvenue sur Tekkies</h1>
            <p class="font-italic text-center mt-4">Partagez votre passion des Sneakers !</p>
            <p class="mt-2 text-center">Entrez en relation avec d'autres passionnés dès maintenant !</p>

        </div>
    </section>
    <section>
        <div class="container col-4 mt-2">
            <form action="connect.php" method="post">
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1" class="font-weight-bold">Adresse email</label>
                    <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">Exemple : prenom.nom@email.com</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="font-weight-bold">Mot de passe</label>
                    <input name='password' type="password" class="form-control" id="exampleInputPassword1" required>
                    <small id="emailHelp" class="form-text text-muted">6 caractères minimum</small>
                </div>

                <div>
                    <a href="http://localhost/mspr1-wis2/user_c.php">Se créer un compte</a>
                </div>

                <button type="submit" class="btn btn-primary mb-5">Se connecter</button>
            </form>
        </div>
    </section>

    <script src="assets/js/manifest.js"></script>
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/app.js"></script>
    </body>
    </html>
<?php include_once 'includes/footer1.php'; ?>