<?php
include_once 'includes/secure.php';
include_once 'includes/helpers.php';


$id = $_GET['id'];

$data = [
    'thumbnail' => $_POST['thumbnail'],
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'phone_number' => $_POST['phone_number'],
    'birthday' => $_POST['birthday'],
    'city' => $_POST['city'],

];

$dbh = connectDB();
$stmt = $dbh->prepare('UPDATE users SET thumbnail = :thumbnail, first_name = :first_name, last_name = :last_name, email = :email, phone_number = :phone_number, birthday = :birthday, city = :city WHERE id = :id');
$stmt->bindParam(':thumbnail', $data['thumbnail']);
$stmt->bindParam(':first_name', $data['first_name']);
$stmt->bindParam(':last_name', $data['last_name']);
$stmt->bindParam(':email', $data['email']);
$stmt->bindParam(':phone_number', $data['phone_number']);
$stmt->bindParam(':birthday', $data['birthday']);
$stmt->bindParam(':city', $data['city']);
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: logout.php");