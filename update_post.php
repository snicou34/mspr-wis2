<?php include_once 'includes/helpers.php';

$id = $_GET['id'];

$data = [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'thumbnail' => $_POST['thumbnail'],
];

$dbh = connectDB();
$stmt = $dbh->prepare('UPDATE posts SET title = :title, body = :body, thumbnail = :thumbnail WHERE id = :id');
$stmt->bindParam(':title', $data['title']);
$stmt->bindParam(':body', $data['body']);
$stmt->bindParam(':thumbnail', $data['thumbnail']);
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: home.php");