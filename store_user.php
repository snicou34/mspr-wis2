<?php
include_once 'includes/helpers.php';

$data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'birthday' => $_POST['birthday'],
    'phone_number' => $_POST['phone_number'],
    'city' => $_POST['city'],
    'thumbnail' => $_POST['thumbnail'],
];

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO users (first_name, last_name, email, password, birthday, phone_number, city, thumbnail) VALUES (:first_name, :last_name, :email, :password, :birthday, :phone_number, :city, :thumbnail)');
$stmt->bindValue(':first_name', $data['first_name']);
$stmt->bindValue(':last_name', $data['last_name']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', $data['password']);
$stmt->bindValue(':birthday', $data['birthday']);
$stmt->bindValue(':phone_number', $data['phone_number']);
$stmt->bindValue(':city', $data['city']);
$stmt->bindValue(':thumbnail', $data['thumbnail']);
$stmt->execute();

$id = $dbh->lastInsertId();

header("Location: index.php?id=$id");