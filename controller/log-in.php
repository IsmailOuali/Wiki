<?php
session_start();
require_once '../model/user.php';

if(@$_POST['login']){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);

}

$log = new user();

$resultat = $log->login($email, $password);

if(!$resultat){
    header('Location: ../login.php');
}
header('Location: ../index.php');
