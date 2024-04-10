<?php

$id = $_GET['id'];
include("./db.php");
$conn -> query("DELETE FROM `items` WHERE `items_article` = '$id'");
$conn -> close();
header('Location: /pages/catalog.php');