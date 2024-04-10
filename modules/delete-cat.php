<?php

include('db.php');

$idItem = filter_var(trim($_GET['id']), FILTER_SANITIZE_STRING);
$idItems = (int)$idItem;
echo $idItems;
$conn -> query("DELETE FROM `categories` WHERE `cat_id` = '$idItems'");

header("Location: /pages/catalog.php");