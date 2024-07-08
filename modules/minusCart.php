<?php
session_start();
$id = $_GET['id'];

// include("db.php");
// $item = $conn -> query("SELECT * FROM `items` WHERE `items_article` = '$id'");
// $result = $item -> fetch_assoc();
// $conn -> close();

if(isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    foreach($cart as $key => $value) {
        if($value['items_article'] == $id) {
            if($value['count'] > 1){
                $value['count']--;
                $cart[$key] = $value;
                $_SESSION['cart'] = $cart;
                break;
                }
                }
    }
}
header('Location: /pages/cart.php');