<?php

include("db.php");

$status = $_POST['order_status'];
$id = $_GET['id'];
var_dump($status, $id);
if($status == 3){
    $conn -> query("DELETE FROM `order-info` WHERE `order_id` = '$id'");
    $conn -> close();
    Header("Location: /pages/account.php");
}
$conn -> query("UPDATE `order-info` SET `order_status` = '$status' WHERE `order_id` = '$id'");
$conn -> close();
Header("Location: ".$_SERVER['HTTP_REFERER']);