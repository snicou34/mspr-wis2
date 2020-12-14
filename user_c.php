<link rel="stylesheet" href="assets/css/app.css">
<?php
include_once 'includes/helpers.php';
$users=getUsers();
?>

    <section>
        <div class="container mt-4">
            <form action="store_user.php" method="POST">

                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Nom</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" class="form-control" required>
                </div>

                <button class="btn btn-primary mb-5" type="submit">
                    Se créer un compte
                </button>
            </form>

        </div>
    </section>

<?php include_once 'includes/footer1.php'; ?>