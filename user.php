<?php
include_once 'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
$id = $_GET['id'];
$user = getUser($id);


?>


        <section style="margin-top: 90px">
            <div class="container">
                <div class="mb-5">s
                    <img src="<?php echo $user['thumbnail']; ?>">
                    <p>Prénom : <strong><?php echo $user['first_name']; ?></strong></p>
                    <p>Nom : <strong><?php echo $user['last_name'] ?></strong></p>
                    <p>Ville : <strong><?php echo $user['city'] ?></strong></p>
                </div>
            </div>
        </section>
        <section>
            <div>

                <h2>Photos publiées de <?php echo $user['first_name'] ?></h2>


        </section>
        <section>
            <div>
                <h2>Photos aimées par <?php echo $user['first_name'] ?></h2>
            </div>
        </section>


<?php include_once 'includes/footer1.php'; ?>