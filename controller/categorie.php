<?php

require_once '../model/categorie.php';

if(@$_POST['submit-categorie']){
    $name =$_POST['category-name'];
}

$obj = new categorie();

$obj->addcategory($name);

header('Location: ../dashboard-admin.php');