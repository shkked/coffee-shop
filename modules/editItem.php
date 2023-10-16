<?php

include('db.php');

$idItem = filter_var(trim($_GET['id']), FILTER_SANITIZE_STRING);
$idItems = (int)$idItem;

$nameItem = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$imgItem = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$descItem = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);
$countItem = filter_var(trim($_POST['count']), FILTER_SANITIZE_STRING);
$countItems = (int)$countItem;
$priceItem = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
$priceItems = (int)$priceItem;
$categoryItem = filter_var(trim($_POST['category']), FILTER_SANITIZE_STRING);
$categoryItems = (int)$categoryItem;

$conn -> query("UPDATE `items` SET `name` = '$nameItem', `img` = '$imgItem', `description` = '$descItem', `count` = '$countItems', `price` = '$priceItems', `category` = '$categoryItems' WHERE `items` . `id` = '$idItems'");
$conn -> close();

header("Location: /php/pages/catalog.php");