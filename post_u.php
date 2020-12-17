<?php
include_once 'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
$post = getPost($_GET['id']);
?>

    <section class="card mb-5 shadow p-3 mb-5 bg-white rounded mb-5 col-4 mx-auto" style="margin: 160px; border: none">

        <div class="container col-8">

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
                    <small id="file" class="form-text text-muted">Insérer le lien d'une image</small>
                </div>

                <button class="btn custom mb-3" type="submit"><i class="fas fa-check-circle mr-2"></i>
                    Actualiser le post
                </button>

        </div>

    </section>

<?php include_once 'includes/footer1.php'; ?>