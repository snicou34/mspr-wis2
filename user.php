<?php
include_once 'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
require_once 'vendor/autoload.php';

use Carbon\Carbon;

$id = $_GET['id'];
$user = getUser($id);
$posts = getPostsUser($id);
$likes = getUserLikes($id);
?>

    <section style="margin-top: 130px; margin-bottom: 40px">

        <div class="container col-6 justify-content-between align-items-center">

        </div>
        <div class="container col-2">
            <img class="mb-3 mt-3 mx-auto shadow p-3 mb-5 bg-white rounded" style="height: 300px" src="<?php echo $user['thumbnail']; ?>">
            <p>Prénom : <strong><?php echo $user['first_name']; ?></strong></p>
            <p>Nom : <strong><?php echo $user['last_name'] ?></strong></p>
            <p>Date de naissance : <strong><?php echo $user['birthday']; ?></strong></p>
            <p>Ville : <strong><?php echo $user['city'] ?></strong></p>
        </div>
    </section>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-6 mx-auto">
            <section>
                <div>

                    <h2 class="mb-4">Publications de <?php echo $user['first_name'] ?></h2>
                    <div>

                        <?php foreach ($posts as $post):
                            $userpost = getUser($post['user_id']);
                            ?>

                            <div class="card mb-5 shadow p-3 mb-5 bg-white rounded" style="border: none">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $post['title'] ?></h4>
                                    <p class="card-text"><?php echo $post['body'] ?></p>
                                    <p class="card-text">
                                        <small class="text-muted">Publié
                                            <?php
                                            date_default_timezone_set('Europe/Paris');
                                            $date = Carbon::make($post['created_at'])->locale('fr-FR');
                                            echo $date->diffForHumans();
                                            ?>
                                        </small>
                                    </p>
                                </div>
                                <img class="mb-4 mx-auto" style="height: auto; width: 100% "
                                     src="<?php echo $post['thumbnail']; ?>">
                            </div>


                        <?php endforeach; ?>


                    </div>

            </section>
        </div>

        <div class="col-6 mx-auto">
            <section>
                <div>

                    <h2 class="mb-4">Publications aimées par <?php echo $user['first_name'] ?></h2>
                    <?php foreach ($likes as $post):
                        $userpost = getUser($post['user_id']);
                        ?>

                        <div class="card mb-5 shadow p-3 mb-5 bg-white rounded" style="border: none">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $post['title'] ?></h4>
                                <p class="card-text"><?php echo $post['body'] ?></p>
                                <p class="card-text">
                                    <small class="text-muted">Publié
                                        <?php
                                        date_default_timezone_set('Europe/Paris');
                                        $date = Carbon::make($post['created_at'])->locale('fr-FR');
                                        echo $date->diffForHumans();
                                        ?>
                                    </small>
                                </p>
                            </div>
                            <img class="mb-4 mx-auto" style="height: auto; width: 100% "
                                 src="<?php echo $post['thumbnail']; ?>">
                        </div>


                    <?php endforeach; ?>


                </div>
            </section>
        </div>
    </div>


<?php include_once 'includes/footer1.php'; ?>