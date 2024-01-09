<?php

session_start();
require_once '../config.php';

if(!$_POST){
    header('Location: index.php');
}

if(@$_POST['register']){

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
}

$obj = new user();
$obj->adduser($nom, $email, $pwd);



header('Location: ../login.php');


