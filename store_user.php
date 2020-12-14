<?php
include_once 'includes/helpers.php';

$data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES(:first_name, :last_name, :email, :password)');
$stmt->bindValue(':first_name', $data['first_name']);
$stmt->bindValue(':last_name', $data['last_name']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', $data['password']);
$stmt->execute();

$id = $dbh->lastInsertId();

header("Location: index.php?id=$id");