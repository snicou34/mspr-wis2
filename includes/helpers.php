<?php
function connectDB()
{
    return new PDO('mysql:host=localhost;dbname=tekkies', 'root', 'root', [PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
}

function ConnectUser($data)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email AND password = :password ");
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':password', $data['password']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUsers()
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUser($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getPosts()
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM posts ORDER BY created_at DESC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getPostsUser($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM posts WHERE user_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserLikes($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM likes INNER JOIN posts ON posts.id = likes.post_id WHERE likes.user_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getPost($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM posts WHERE id = $id");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getLikes()
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM likes");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCountLikes($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT COUNT(*) nb_likes FROM likes WHERE post_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
