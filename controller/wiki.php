<?php
session_start();
include '../config.php';
include '../model/wiki.php';

$id_user = $_SESSION['id_user'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['wiki-name']) ? $_POST['wiki-name'] : '';
    $description = isset($_POST['description-wiki']) ? $_POST['description-wiki'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';

    if (empty($name) || empty($description) || empty($category)) {
        echo "Please fill out all required fields.";
        exit;
    }

    $tags = isset($_POST['tag']) ? implode(',', $_POST['tag']) : '';
    date_default_timezone_set("Africa/Casablanca");
    $date = date("Y-m-d H:i:s");

    $new_image = 'wiki.png';
    $result = wiki::addwiki($name, $description, $category, $tags, $new_image, $date, $id_user);
    header('Location: ../wiki-panel.php');
}
