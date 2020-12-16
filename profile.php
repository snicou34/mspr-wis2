<?php
include_once 'includes/secure.php';
include_once 'includes/header.php';
include_once 'includes/helpers.php';
?>



    <section style="margin-top: 130px">

        <div class="container col-6 justify-content-between align-items-center">
            <h1>Profil de <strong><?php echo $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name']; ?></strong></h1>
        </div>
        <div class="container col-6">
    <img class="mb-3 mt-3 mx-auto shadow p-3 mb-5 bg-white rounded" style="height: 300px" src="<?php echo $_SESSION['user']['thumbnail']; ?>">
            <p><strong>Votre prénom : </strong><?php echo $_SESSION['user']['first_name']; ?></p>
            <p><strong>Votre nom : </strong><?php echo $_SESSION['user']['last_name']; ?></p>
            <p><strong>Votre adresse email : </strong><?php echo $_SESSION['user']['email']; ?></p>
            <p><strong>Votre numéro de téléphone : </strong><?php echo $_SESSION['user']['phone_number']; ?></p>
            <p><strong>Votre date de naissance : </strong><?php echo $_SESSION['user']['birthday']; ?></p>
            <p><strong>Votre ville : </strong><?php echo $_SESSION['user']['city']; ?></p>

            <a href="users_u.php?id=<?php echo $_SESSION['user']['id']; ?>" class="btn btn-primary mb-4"><i class="far fa-edit" style="margin-right: 5px"></i>Modifier mon profil</a>
        </div>

    </section>


<?php include_once 'includes/footer1.php'; ?>