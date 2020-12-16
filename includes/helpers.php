<?php
function connectDB(){
    return new PDO('mysql:host=localhost;dbname=tekkies', 'root', '', [PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
}

function ConnectUser($data){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email AND password = :password ");
    $stmt->bindParam(':email' , $data['email']);
    $stmt->bindParam(':password' , $data['password']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUsers(){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUser($id) {
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(':id' , $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getPosts() {
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM posts");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getPost($id) {
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM posts WHERE id = $id");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

