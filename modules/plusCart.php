<?php
session_start();
include("db.php");
$id = $_GET['id'];
$item = $conn -> query("SELECT * FROM `items` WHERE `items_article` = '$id'");
$result = $item -> fetch_assoc();
$conn -> close();
$cart = $_SESSION['cart'];
// var_dump($cart);
foreach($cart as $key => $value) {
    if($value['items_article'] == $id) {
        if($result['items_count'] - $value['count'] > 0) {
            $value['count']++;
            $cart[$key] = $value;
            $_SESSION['cart'] = $cart;
            break;
        }
    }
}
header("Location: /pages/cart.php");