<?php
require '../config.php';
require '../model/tag.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tagId = $_POST['tagId'];
    $modifiedTagName = $_POST['modifiedTagName'];

    $obj = tag::modifyTag($tagId, $modifiedTagName);

}
