<link rel="stylesheet" href="assets/css/app.css">
<link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="16x16">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
      crossorigin="anonymous">

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
<section>
    <div class="container col-6 mx-auto mt-2">
        <h4 class="text-center">Connectez-vous à votre compte</h4>
        <form action="connect.php" method="post">
            <div class="form-floating mb-3 mt-4" style="width: 400px; margin-left: auto; margin-right: auto">
                <input name='email' type="email" placeholder="Entrez votre adresse email" class="form-control"
                       id="exampleInputEmail1"
                       aria-describedby="emailHelp" required>
                <label for="floatingInput">Votre adresse email</label>
            </div>
            <div class="form-floating" style="width: 400px; margin-left: auto; margin-right: auto">
                <input name='password' type="password" placeholder="Entrez votre mot de passe" class="form-control"
                       id="exampleInputPassword1" required>
                <label for="floatingPassword">Votre mot de passe</label>
            </div>
            <button type="submit" class="btn mt-4 mb-4"
                    style="background-color: #E7383C; color: #FFFFFF; width: 300px; display: block; margin: auto">Se
                connecter
            </button>
        </form>
        <h4 class="text-center">Ou créez votre compte dès maintenant</h4>
        <a href="user_c.php" class="btn mt-4 mb-3"
           style="background-color: #E7383C; color: #FFFFFF; width: 300px; display: block; margin: auto">Créer mon
            compte</a>
        </button>
    </div>
</section>
<script src="assets/js/manifest.js"></script>
<script src="assets/js/vendor.js"></script>
<script src="assets/js/app.js"></script>
<?php include_once 'includes/footer1.php'; ?>