<?php 

include('db.php');

$nameItem = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$imgItem = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);


echo $nameItem;
echo $imgItem;


$conn -> query("INSERT INTO `categories` (`cat_name`, `cat_img`) VALUES ('$nameItem', '$imgItem')");
$conn -> close();

header('Location: /pages/account.php');