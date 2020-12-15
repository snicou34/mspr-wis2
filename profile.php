<?php
include_once 'includes/header.php';
include_once 'includes/helpers.php';
session_start();
var_dump($_SESSION);
?>


    <section>
        <div class="container" style="margin-top: 100px">
    <img class="mb-4 mx-auto" style="height: 250px; width: 250px" src="<?php echo $_SESSION['user']['thumbnail']; ?>">
         <p>Prénom : <?php echo $_SESSION['user']['first_name']; ?></p>
         <p>Nom : <?php echo $_SESSION['user']['last_name']; ?></p>
         <p>Email : <?php echo $_SESSION['user']['email']; ?></p>
         <p>N° de téléphone : <?php echo $_SESSION['user']['phone_number']; ?></p>
         <p>Date de naissance : <?php echo $_SESSION['user']['birthday']; ?></p>
         <p>Ville : <?php echo $_SESSION['user']['city']; ?></p>

        </div>
    </section>


    <script src="assets/js/manifest.js"></script>
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/app.js"></script>

<?php include_once 'includes/footer1.php'; ?>