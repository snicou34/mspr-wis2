<?php
include_once 'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
$post = getPost($_GET['id']);
var_dump($post );
?>

    <section class="mb-5" style="margin: 100px">

        <div class="container col-6">
            <form action="update_post.php?id=<?php echo $post['id']; ?>" method="POST">

                <div class="form-group">
                    <label for="title"><strong>Titre:</strong></label>
                    <input type="text" id="title" name="title" class="form-control" value="<?php echo $post['title']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="body"><strong>Description:</strong></label>
                    <input type="text" id="body" name="body" class="form-control" value="<?php echo $post['body']; ?>" required>
                </div>


                <div class="form-group">
                    <label for="thumbnail"><strong>Photo publication</strong></label>
                    <input type="text" id="thumbnail" name="thumbnail" class="form-control" value="<?php echo $post['thumbnail']; ?>">
                    <small id="text" class="form-text text-muted">Insérer un lien d'image</small>
                </div>

                <button class="btn btn-primary mb-3" type="submit"><i class="fas fa-check-circle mr-2"></i>
                    Actualiser le post
                </button>

        </div>

    </section>

<?php include_once 'includes/footer1.php'; ?>