<?php include_once 'includes/helpers.php';

$id = $_GET['id'];

$data = [
    'title'     => $_POST['title'],
    'body'     => $_POST['body'],
    'thumbnail'     => $_POST['thumbnail'],

    ];

$dbh = connectDB();
$stmt = $dbh->prepare('UPDATE posts SET title = :tite, body = :body, thumbnail = :thumbnail WHERE id = :id');
$stmt->bindValue(':title', $data['title']);
$stmt->bindValue(':body', $data['body']);
$stmt->bindValue(':thumbnail', $data['thumbnail']);
$stmt->execute();

header("Location: home.php");