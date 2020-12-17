<?php
include_once 'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
$id = $_GET['id'];
$user = getUser($id);
$posts = getPostsUser($id);
?>


    <section style="margin-top: 90px">
        <div class="container">
            <div class="mb-5">
                <img src="<?php echo $user['thumbnail']; ?>">
                <p>Prénom : <strong><?php echo $user['first_name']; ?></strong></p>
                <p>Nom : <strong><?php echo $user['last_name'] ?></strong></p>
                <p>Ville : <strong><?php echo $user['city'] ?></strong></p>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-6 mx-auto">
            <section>
                <div>

                    <h2>Photos publiées de <?php echo $user['first_name'] ?></h2>
                    <div>

                        <?php foreach ($posts as $post):
                            $userpost = getUser($post['user_id']);
                            ?>

                            <div class="card mb-5 shadow p-3 mb-5 bg-white rounded" style="border: none">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $post['title'] ?></h4>
                                    <p class="card-text"><?php echo $post['body'] ?></p>
                                    <p class="card-text"><small class="text-muted">Publié le <?php echo $post['created_at'] ?></small></p>
                                </div>
                                <img class="mb-4 mx-auto" style="height: 500px; width: 500px"
                                     src="<?php echo $post['thumbnail']; ?>">
                            </div>


                        <?php endforeach; ?>


                    </div>

            </section>
        </div>
    </div>

    <section>
        <div>

            <h2>Photos aimées par <?php echo $user['first_name'] ?></h2>

        </div>
    </section>


<?php include_once 'includes/footer1.php'; ?>