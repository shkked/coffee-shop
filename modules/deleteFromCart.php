<?php
session_start();
$id = $_GET['id'];

$cart = $_SESSION['cart'];
foreach ($cart as $key => $value) {
    if ($value['items_article'] == $id) {
        unset($cart[$key]);
    }
};
$_SESSION['cart'] = $cart;
header("Location: ".$_SERVER['HTTP_REFERER']);
