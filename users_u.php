<?php include_once 'includes/header.php';
include_once 'includes/helpers.php';
session_start();
$user = getUser($_GET['id']);
?>

    <section class="mb-5"style="margin-top: 43px" >
        <div class="container col-6">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="py-5">Modifier mon profil</h1>
            </div>
            <form action="update_users.php?id=<?php echo $_SESSION['user']['id']; ?>" method="POST">

                <div class="form-group">
                    <label for="price"><strong>Votre prénom :</strong></label>
                    <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo $user['first_name']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="last_name"><strong>Votre nom :</strong></label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $user['last_name']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="email"><strong>Votre email :</strong></label>
                    <input type="text" id="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="birthday"><strong>Votre date de naissance :</strong></label>
                    <input type="date" id="birthday" name="birthday" class="form-control" value="<?php echo $user['birthday']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="phone_number"><strong>Votre numéro de téléphone :</strong></label>
                    <input type="number" id="phone_number" name="phone_number" class="form-control" value="<?php echo $user['phone_number']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="city"><strong>Ville :</strong></label>
                    <input type="text" id="city" name="city" class="form-control" value="<?php echo $user['city']; ?>" required>
                </div>

                <button class="btn btn-primary mb-3" type="submit"><i class="fas fa-check-circle mr-2"></i>
                    Modifier mon profil
                </button>

        </div>

    </section>

<?php include_once 'includes/footer1.php'; ?>