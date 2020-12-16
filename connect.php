<?php include_once 'includes/helpers.php';

$data = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];



$result = ConnectUser($data);

if ($result === false) {
    header('location: index.php?email=' . $data['email']);
}
else {

    session_start();
    $_SESSION['user'] = $result;
    header('Location: home.php');

}

