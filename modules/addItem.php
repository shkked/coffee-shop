<?php 

include('db.php');

$nameItem = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$imgItem = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$descItem = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);
$countItem = filter_var(trim($_POST['count']), FILTER_SANITIZE_STRING);
$priceItem = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
$categoryItem = filter_var(trim($_POST['category']), FILTER_SANITIZE_STRING);
$categoryItems = (int)$categoryItem;


echo $nameItem;
echo $imgItem;
echo $descItem;
echo $countItems;
echo $priceItems;
echo $categoryItems;


$conn -> query("INSERT INTO `items` (`items_name`, `items_img`, `items_description`, `items_category`, `items_count`, `items_price`) VALUES ('$nameItem', '$imgItem', '$descItem', '$categoryItems', '$countItems', '$priceItems')");
$conn -> close();

header('Location: /ground-black/pages/catalog.php');