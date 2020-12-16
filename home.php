<?php
include_once'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
$posts=getPosts();

?>

    <section class="container" style="margin-top: 130px">
        <div class="row">
            <div class="col-3">
                <h4>Liste des utilisateurs</h4>
            </div>
            <div class="col-6">

                        <?php if($posts): ?>

                                <?php foreach ($posts as $post):
                                    ?>

                                    <div class="card mb-5 shadow p-3 mb-5 bg-white rounded" style="border: none">
                                        <div class="card-body">
                                            <div class="text-end">
                                            <div class="btn-group">
                                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="post_u.php?id=<?php echo $post['id']; ?>">
                                                        <i class="fas fa-edit" style="margin-right: 3px"></i>Modifier
                                                    </a>
                                                    <a class="dropdown-item" href="post_d.php?id=<?php echo $post['id']; ?>" style=" color: red"><i class="far fa-trash-alt" style="margin-right:
                                                    5px"></i>Supprimer</a>
                                                </div>
                                            </div>
                                            </div>
                                            <h4 class="card-title"><?php echo $post['title'] ?></h4>
                                            <p class="card-text"><?php echo $post['body']?></p>
                                            <p class="card-text"><small class="text-muted">Publié le <?php echo $post['created_at']?></small></p>
                                        </div>
                                        <img class="mb-4 mx-auto" style="height: 500px; width: 500px" src="<?php echo $post['thumbnail'];?>">
                                    </div>



                                <?php endforeach;  ?>

                        <?php else: ?>
                            <div class="alert alert-warning" role="alert">
                                Aucun post n'est disponible pour le moment !
                            </div>
                    <?php endif; ?>

        </div>
            <div class="col-3">

            </div>
        </div>

    </section>





<?php include_once 'includes/footer1.php'; ?>