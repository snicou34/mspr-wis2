<?php include_once 'includes/helpers.php';
session_start();

$data = [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'thumbnail' => $_POST['thumbnail'],
];

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO posts ( title, body, thumbnail, user_id) VALUES( :title, :body, :thumbnail, :user_id)');
$stmt->bindValue(':title', $data['title']);
$stmt->bindValue(':body', $data['body']);
$stmt->bindValue(':thumbnail', $data['thumbnail']);
$stmt->bindValue(':user_id', $_SESSION['user']['id']);
$stmt->execute();

$id = $dbh->lastInsertId();
// var_dump($stmt->errorInfo());
header("Location: home.php?id=$id");
