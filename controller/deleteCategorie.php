<?php

include '../model/categorie.php';

$r = $_GET['id'];

$obj = categorie::deletecategory();

header('Location: ../dashboard-admin.php');