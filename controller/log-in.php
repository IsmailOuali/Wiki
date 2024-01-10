<?php
session_start();
require_once '../model/user.php';

if(@$_POST['login']){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$log = new user();

$mdps = $log->login($email, $password);

$verify = password_verify($password, $mdps);


if(!$verify){
    header('Location: ../login.php');
}
header('Location: ../index.php');
