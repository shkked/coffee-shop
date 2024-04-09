<?php

include('db.php');

$idItem = filter_var(trim($_GET['id']), FILTER_SANITIZE_STRING);
$idItems = (int)$idItem;
echo $idItems;
$conn -> query("DELETE FROM `articles` WHERE `articles_id` = '$idItems'");

header("Location: /pages/articles.php");