<?php

include('db.php');

$idItem = filter_var(trim($_GET['id']), FILTER_SANITIZE_STRING);
$idItems = (int)$idItem;
echo $idItems;
$conn -> query("DELETE FROM `items` WHERE `id` = '$idItems'");

header("Location: /php/pages/catalog.php");