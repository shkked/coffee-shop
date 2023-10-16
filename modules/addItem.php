<?php 

include('db.php');

$nameItem = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$imgItem = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$descItem = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);
$countItem = filter_var(trim($_POST['count']), FILTER_SANITIZE_STRING);
$countItems = (int)$countItem;
$priceItem = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
$priceItems = (int)$priceItem;
$categoryItem = filter_var(trim($_POST['category']), FILTER_SANITIZE_STRING);
$categoryItems = (int)$categoryItem;


echo $nameItem;
echo $imgItem;
echo $descItem;
echo $countItems;
echo $priceItems;
echo $categoryItems;


$conn -> query("INSERT INTO `items` (`name`, `img`, `description`, `count`, `price`, `category`) VALUES ('$nameItem', '$imgItem', '$descItem', '$countItems', '$priceItems', '$categoryItems')");
$conn -> close();

header('Location: /php/pages/catalog.php');