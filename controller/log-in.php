<?php
session_start();
require_once '../model/user.php';

if(@$_POST['login']){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password = $_POST['password'];
}

$log = new user();

$res = $log->login($email, $password);

echo $password;