<?php

include('db.php');

$idItem = filter_var(trim($_GET['id']), FILTER_SANITIZE_STRING);
$idItems = (int)$idItem;
echo $idItems;
$conn -> query("DELETE FROM `items` WHERE `items_id` = '$idItems'");

header("Location: /ground-black/pages/catalog.php");