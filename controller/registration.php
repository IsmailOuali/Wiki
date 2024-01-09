<?php

session_start();
require_once '../config.php';

if(!$_POST){
    header('Location: index.php');
}

$nom = $_POST['nom'];
$email = $_POST['email'];
$pwd = $_POST['password'];

header('Location: ../login.php');


