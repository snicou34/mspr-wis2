<?php include_once 'includes/helpers.php';

$data = [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'thumbnail' => $_POST['thumbnail']
];

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO posts ( title, body, thumbnail) VALUES( :title, :body, :thumbnail)');
$stmt->bindValue(':title', $data['title']);
$stmt->bindValue(':body', $data['body']);
$stmt->bindValue(':thumbnail', $data['thumbnail']);
$stmt->execute();

$id = $dbh->lastInsertId();
// var_dump($stmt->errorInfo());
header("Location: home.php?id=$id");
