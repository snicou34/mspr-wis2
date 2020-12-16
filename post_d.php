<?php include_once 'includes/helpers.php';

$id = $_GET['id'];

$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM posts WHERE id = :id');
$stmt->bindValue(':id', $id);
$stmt->execute();

header('Location: home.php ');