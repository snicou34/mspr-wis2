<?php
include_once'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
$posts=getPosts();

?>
    <section class="col-8 mx-auto" style="margin-top: 130px">
        <div class="container col-6 mt-4" >
            <form action="store_post.php" method="POST">

                <h4 class="mb-3">Détails de votre publication</h4>

                <div class="form-group mb-3">
                    <label for="title">Ajouter un titre à votre publication :</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="body">Ajouter une description à votre publication :</label>
                    <input type="text" id="body" name="body" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="thumbnail">Ajouter une image à votre publication :</label>
                    <input type="text" id="thumbnail" name="thumbnail" class="form-control" required>
                    <small id="emailHelp" class="form-text text-muted">Insérer le lien de l'image</small>
                </div>

                <button class="btn mb-3" type="submit" style="background-color: #E7383C; color: #FFFFFF; width: 300px; display: block; margin: auto"><i class="fas fa-paper-plane" style="margin-right: 5px"></i>
                    Publier votre publication
                </button>
            </form>

        </div>
    </section>

    <script src="assets/js/manifest.js"></script>
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/app.js"></script>

<?php include_once 'includes/footer1.php'; ?>