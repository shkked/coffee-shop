<?php

include("db.php");

if (isset($_GET['id'])) { 
    $id = $_GET['id'];
    $conn -> query("DELETE FROM `items_images` WHERE `image_id` = '$id'");
    $conn -> close();
} else {
    $idcat = $_GET['idcat'];
    $conn -> query("UPDATE `categories` SET `cat_img` = '' WHERE `cat_id` = '$idcat'");
    $conn -> close();
}
// header("Location: /pages/account.php");
header("Location: ".$_SERVER['HTTP_REFERER']);
// cup-fill.svg