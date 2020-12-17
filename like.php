<?php

function connectDB()
{
    return new PDO('mysql:host=localhost;dbname=tekkies', 'root', 'root', [PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
}

session_start();

$post_id = $_GET['post_id'];
$user_id = $_SESSION['user']['id'];

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO likes (user_id, post_id) VALUES (:user_id, :post_id)');
$stmt->bindParam(':user_id', $user_id);
$stmt->bindParam(':post_id', $post_id);
$stmt->execute();

header('Location: home.php');

