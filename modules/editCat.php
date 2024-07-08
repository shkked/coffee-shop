<?php

include('db.php');

$idItem = filter_var(trim($_GET['id']), FILTER_SANITIZE_STRING);
$idItems = (int)$idItem;
// echo $idItems;

$nameItem = filter_var(trim($_POST['cat_name']), FILTER_SANITIZE_STRING);
echo $nameItem;
$imgItem = $_POST['cat_img'][0];
if(!empty($nameItem)){
    if(empty($imgItem)){
        $conn -> query("UPDATE `categories` 
        SET `cat_name` = '$nameItem' 
        WHERE `cat_id` = '$idItems'");
        $conn -> close();
        } else {
        $conn -> query("UPDATE `categories` 
        SET `cat_name` = '$nameItem',
        `cat_img` = '$imgItem'
        WHERE `cat_id` = '$idItems'");
        $conn -> close();
    }
} else {
    echo 'Не сработало';
}

header("Location: /pages/account.php");