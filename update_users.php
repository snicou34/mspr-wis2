<?php include_once 'includes/helpers.php';

$id = $_GET['id'];

$data = [
    'first_name'     => $_POST['first_name'],
    'last_name'     => $_POST['last_name'],
    'email'     => $_POST['email'],
    'password' => $_POST['password'],
    'birthday' => $_POST['birthday'],
    'phone_number' => $_POST['phone_number'],
    'city' => $_POST['city'],
];

$dbh = connectDB();
$stmt = $dbh->prepare('UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email, password = :password, birthday = :birthday,  phone_number = :phone_number,  city = :city,  WHERE id = :id');
$stmt->bindValue(':first_name', $data['first_name']);
$stmt->bindValue(':last_name', $data['last_name']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', $data['password']);
$stmt->bindValue(':birthday', $data['birthday']);
$stmt->bindValue(':phone_number', $data['phone_number']);
$stmt->bindValue(':city', $data['city']);
$stmt->bindValue(':id' , $id);
$stmt->execute();

header("Location: profile.php");