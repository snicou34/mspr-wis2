<?php
include_once 'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
$post = getPost($_GET['id']);
?>

    <section class="mb-5 col-6 mx-auto" style="margin: 100px">

        <div class="container col-6">

            <h4 class="mb-3">Détails de votre publication</h4>
            <form action="update_post.php?id=<?php echo $post['id']; ?>" method="POST">

                <div class="form-group mb-3">
                    <label for="title">Modifier le titre de votre publication :</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?php echo $post['title']; ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="body">Modifier la description de votre publication :</label>
                    <input type="text" id="body" name="body" class="form-control" value="<?php echo $post['body']; ?>" required>
                </div>


                <div class="form-group mb-3">
                    <label for="thumbnail">Modifier l'image de votre publication :</label>
                    <input type="text" id="thumbnail" name="thumbnail" class="form-control" value="<?php echo $post['thumbnail']; ?>">
                    <small id="file" class="form-text text-muted">Insérer un lien d'image</small>
                </div>

                <button class="btn mb-3" type="submit" style="background-color: #E7383C; color: #FFFFFF"><i class="fas fa-check-circle mr-2"></i>
                    Actualiser le post
                </button>

        </div>

    </section>

<?php include_once 'includes/footer1.php'; ?>