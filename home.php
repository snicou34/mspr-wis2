<?php
include_once'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
$posts=getPosts();

?>
    <div class="container" style="margin-top: 100px">
        <div class="row">
                        <?php if($posts): ?>

                                <?php foreach ($posts as $post):
                                    ?>
                                <section class="col-12 mx-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $post['title'] ?></h5>
                                            <p class="card-text"><?php echo $post['body']?></p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                        <img class="mb-2 mx-auto" style="height: 500px; width: 500px"  src="<?php echo $post['thumbnail'];?>">
                                    </div>
                                </section>

                                <?php endforeach;  ?>

                        <?php else: ?>
                            <div class="alert alert-warning" role="alert">
                                Aucun post n'est disponible pour le moment !
                            </div>
                        <?php endif; ?>

            <a href="post_c.php" class="btn btn-primary mb-5" ><i class="fas fa-plus-circle mr-2"></i>Créer un post</a>
            </div>




            <script src="assets/js/manifest.js"></script>
            <script src="assets/js/vendor.js"></script>
            <script src="assets/js/app.js"></script>

<?php include_once 'includes/footer1.php'; ?>