<?php
require_once '../model/tag.php';

if(@$_POST['valider']){
    $tagName = $_POST['tag-name'];
}

$log = new tag();

$result = $log->addtag($tagname);

header('Location: ../dashboard-admin.php');
