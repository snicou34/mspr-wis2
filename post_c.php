<?php include_once 'includes/header.php';
include_once 'includes/helpers.php';
?>

    <section style="margin-top: 100px">
        <div class="container col-6 mt-4" >
            <form action="store_post.php" method="POST">

                <div class="form-group">
                    <label for="title"><strong>Titre:</strong></label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="body"><strong>Description :</strong></label>
                    <input type="text" id="body" name="body" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="thumbnail"><strong>Image du post:</strong></label>
                    <input type="text" id="thumbnail" name="thumbnail" class="form-control" required>
                    <small id="emailHelp" class="form-text text-muted">Insérer lien de l'image</small>
                </div>

                <button class="btn btn-primary mb-3" type="submit"><i class="fas fa-check-circle mr-2"></i>
                    Ajouter un post
                </button>
            </form>

        </div>
    </section>

<?php include_once 'includes/footer1.php'; ?>