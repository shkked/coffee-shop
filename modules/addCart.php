<?php
session_start();

include('db.php');
$id = $_GET['id'];

$item = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_article` = '$id'");
$item = $item -> fetch_assoc();
$itemimg = $conn -> query("SELECT * FROM `items_images` WHERE `item_id` = '$id'");
$img = $itemimg -> fetch_assoc();

// var_dump($img);
if($_SESSION['cart']) {
    foreach($_SESSION['cart'] as $key => $value) {
        if($value['items_article'] == $item['items_article']) {
            $_SESSION['cart'][$key]['count']++;
            break;
        } else {
            $item = array_merge($item, ['count' => 1], ['img' => $img['item_image']]);
            var_dump($item);
            $_SESSION['cart'][] = $item;
            break;
        }
    }
} else {
    $item = array_merge($item, ['count' => 1], ['img' => $img['item_image']]);
    var_dump($item);
    $_SESSION['cart'][] = $item;
}
$conn -> close();
// var_dump($_SESSION['cart']);
header("Location: ".$_SERVER['HTTP_REFERER']);
// session_unset();
// session_abort();