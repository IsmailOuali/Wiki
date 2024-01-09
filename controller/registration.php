<?php

session_start();
require_once '../model/user.php';

if(!$_POST){
    header('Location: ../index.php');
}

if(@$_POST['register']){

    $nom = $_POST['name'];
    $email = $_POST['email'];

    $pwd = $_POST['password'];
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
}

$obj = new user();
$obj->adduser($nom, $email, $pwd);



header('Location: ../login.php');


