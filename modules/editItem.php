<?php

include('db.php');

$idItem = filter_var(trim($_GET['id']), FILTER_SANITIZE_STRING);
$idItems = (int)$idItem;

$nameItem = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$imgItem = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$descItem = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);
$countItem = filter_var(trim($_POST['count']), FILTER_SANITIZE_STRING);
$priceItem = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
$categoryItem = filter_var(trim($_POST['category']), FILTER_SANITIZE_STRING);
$categoryItems = (int)$categoryItem;
$availableItem = filter_var(trim($_POST['available']), FILTER_SANITIZE_STRING);

$conn -> query("UPDATE `items` SET `items_name` = '$nameItem', `items_img` = '$imgItem', `items_description` = '$descItem', `items_count` = '$countItems', `items_price` = '$priceItems', `items_category` = '$categoryItems', `items_available` = '$availableItem' WHERE `items` . `id` = '$idItems'");
$conn -> close();

header("Location: /ground-black/pages/catalog.php");