<?php 
session_start();

include('db.php');
$id = $_GET['id'];

$item = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_article` = '$id'");
$item = $item -> fetch_assoc();
// var_dump($item);
$itemimg = $conn -> query("SELECT * FROM `items_images` WHERE `item_id` = '$id'");
$img = $itemimg -> fetch_assoc();

// var_dump($img);
if(isset($_SESSION['fav']) && !empty($_SESSION['fav'])) {
    $nonunique = false;
    foreach($_SESSION['fav'] as $key => $value) {
        if($value['items_article'] == $item['items_article']) {
            $nonunique = true;
            unset($_SESSION['fav'][$key]);
        }
    }
    if (!$nonunique) {
        $item = array_merge($item, ['items_img' => $img['item_image']]);
        var_dump('Сессия избранных существует, но товара нет');
        $_SESSION['fav'][] = $item;
    }
        // // var_dump($value['items_article'] == $item['items_article']);
        // if($value['items_article'] == $item['items_article']) {
        //     // echo '<br/>' . 'Такой товар уже добавлен в избранное';
        //     unset($_SESSION['fav'][$key]);
        //     // break;
        // } else {
        //     $item = array_merge($item, ['items_img' => $img['item_image']]);
        //     var_dump('Сессия избранных существует, но товара нет');
        //     $_SESSION['fav'][] = $item;
        //     break;
        // }
    
} else {
    $item = array_merge($item, ['items_img' => $img['item_image']]);
    var_dump('Сессия избранных не существует');
    $_SESSION['fav'][] = $item;
}
$conn -> close();
var_dump(count($_SESSION['fav']));
// session_unset();
header("Location: ".$_SERVER['HTTP_REFERER']);