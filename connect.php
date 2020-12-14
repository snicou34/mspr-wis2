<?php include_once 'includes/helpers.php';

session_start();

$correct_login_password = False;

$data = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];

if ($users = getUsers()):

    foreach ($users as $user):

        if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password'])
        {
            $_SESSION['user']['email'] = $_POST['email'];
            $_SESSION['user']['password'] = $_POST['password'];

            $correct_login_password = True;}

        if ($correct_login_password) {
            header("Location: home.php");
        }
        else {
            header("Location: index.php");
        }

    endforeach;
endif;