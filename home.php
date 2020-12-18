<?php
include_once 'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
require_once 'vendor/autoload.php';

use Carbon\Carbon;

$posts = getPosts();
$users = getUsers();
$likes = getLikes();
?>

    <section class="container" style="margin-top: 130px">
        <div class="row">
            <div class="col-3">
                <div id="sticker-list">
                <h4 class="text-center sidebar1">
                    <i class="fas fa-users" style="margin-right: 8px"></i>
                    Liste des utilisateurs
                </h4>
                <?php if ($users): ?>
                    <table class="table mt-3">
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <hr>
                            <img src="<?php echo $user['thumbnail'] ?> "
                                 style="margin-right: 8px; border-radius: 50%; width: 30px; height: 30px">
                            <a href="user.php?id=<?php echo $user['id']; ?>"
                               style="color:inherit;text-decoration:none;"><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></a>

                        <?php endforeach; ?>
                        <hr>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div class="alert alert-warning" role="alert">
                        Il n'y a pas d'utilisateurs pour le moment.
                    </div>
                <?php endif; ?>


            </div>
            </div>
            <div class="col-6">

                <?php if ($posts): ?>

                    <?php foreach ($posts as $post):
                        $postuser = getUser($post['user_id']);
                        $count = getCountLikes($post['id']);
                        ?>


                        <div class="card mb-5 shadow p-3 mb-5 bg-white rounded slide-up" style="border: none">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <img src="<?php echo $postuser['thumbnail'] ?> "
                                             style="margin-right: 5px; border-radius: 50%; width: 45px; height: 45px">
                                        <strong><?php echo $postuser['first_name'] . ' ' . $postuser['last_name'] ?></strong>
                                    </div>
                                </div>
                                <div class="col-4">
                                </div>
                                <?php if ($_SESSION['user']['id'] === $post['user_id']) : ?>
                                    <div class="col-2">
                                        <div class="text-end" style="margin-left: 50px">
                                            <div class="btn-group">
                                                <button type="button" class="btn dropdown-toggle"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                       href="post_u.php?id=<?php echo $post['id']; ?>">
                                                        <i class="fas fa-edit" style="margin-right: 3px"></i>Modifier
                                                    </a>
                                                    <a class="dropdown-item"
                                                       href="post_d.php?id=<?php echo $post['id']; ?>"
                                                       style=" color: red"><i class="far fa-trash-alt"
                                                                              style="margin-right:5px"></i>Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>


                            <h4 class="card-title"><?php echo $post['title'] ?></h4>
                            <p class="card-text mb-2"><?php echo $post['body'] ?></p>


                            <img class="mb-4 mt-2 mx-auto" style="height: auto; width: 100% "
                                 src="<?php echo $post['thumbnail']; ?>">

                            <div class="row">
                                <div class="col-4">
                                    <form method="POST" action="like.php?post_id=<?php echo $post['id'] ?>">
                                        <button type="submit" class="btn rounded-pill"
                                                style="background-color: #E7383C; color: #FFFFFF"><strong><?php echo $count['nb_likes'] ?></strong><i
                                                    class="fas fa-heart"
                                                    style="margin-right: 3px; margin-left: 3px"></i>
                                            J'aime
                                        </button>
                                    </form>
                                </div>
                                <div class="col-4">
                                </div>
                                <div class="col-4">
                                    <p class="card-text text-end mt-2"><small class="text-muted">Publié
                                            <?php


                                            date_default_timezone_set('Europe/Paris');


                                            $date = Carbon::make($post['created_at'])->locale('fr-FR');


                                            echo $date->diffForHumans(); ?>

                                        </small></p>
                                </div>
                            </div>


                        </div>


                    <?php endforeach; ?>

                <?php else: ?>
                    <div class="alert alert-warning" role="alert">
                        Aucun post n'est disponible pour le moment !
                    </div>
                <?php endif; ?>

            </div>
            <div class="col-3">
                <div id="sticker-options">
                <h4 class="text-center mb-3"
                    style="background-color: #B2B2B2; color: #FFFFFF; padding: 15px; border-radius: 12px"><i
                            class="fas fa-bell" style="margin-right: 8px"></i>Mes
                    notifications</h4>

                <h4 class="text-center"
                    style="background-color: #B2B2B2; color: #FFFFFF; padding: 15px; border-radius: 12px"><i
                            class="fas fa-comments" style="margin-right: 8px"></i>Mes
                    messages</h4>
                </div>

            </div>
        </div>

    </section>

<?php include_once 'includes/footer1.php'; ?>