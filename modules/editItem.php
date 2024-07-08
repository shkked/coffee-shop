<?php

include('db.php');

$idItem = filter_var(trim($_GET['id']), FILTER_SANITIZE_STRING);
$idItems = (int)$idItem;
// echo $idItems;

$nameItem = filter_var(trim($_POST['items_name']), FILTER_SANITIZE_STRING);
// echo $nameItem;
$articleItem = filter_var(trim($_POST['items_article']), FILTER_SANITIZE_STRING);
$purposeItem = filter_var(trim($_POST['items_purpose']), FILTER_SANITIZE_STRING);
$imgItem = $_POST['images'];
$descItem = filter_var(trim($_POST['items_description']), FILTER_SANITIZE_STRING);
$subdescItem = filter_var(trim($_POST['items_subdesc']), FILTER_SANITIZE_STRING);
$countItem = filter_var(trim($_POST['items_count']), FILTER_SANITIZE_STRING);
$priceItem = filter_var(trim($_POST['items_price']), FILTER_SANITIZE_STRING);
$densityItem = filter_var(trim($_POST['items_density']), FILTER_SANITIZE_STRING);
$acidityItem = filter_var(trim($_POST['items_acidity']), FILTER_SANITIZE_STRING);
$ratingItem = filter_var(trim($_POST['items_rating']), FILTER_SANITIZE_STRING);
$countryItem = filter_var(trim($_POST['items_country']), FILTER_SANITIZE_STRING);
$tasteItem = filter_var(trim($_POST['items_taste']), FILTER_SANITIZE_STRING);
$methodItem = filter_var(trim($_POST['items_method']), FILTER_SANITIZE_STRING);
$availableItem = filter_var(trim($_POST['items_available']), FILTER_SANITIZE_STRING);
$categoryItem = filter_var(trim($_POST['items_category']), FILTER_SANITIZE_STRING);
$categoryItems = (int)$categoryItem;
// echo ;
// echo "<br/>";
// echo $_POST['items_article'];
// echo "<br/>";
// echo $_POST['items_description'];
// echo "<br/>";
// echo $_POST['items_subdesc'];
// echo "<br/>";
// echo $_POST['items_category'];
// echo "<br/>";
// echo $_POST['items_count'];
// echo "<br/>";
// echo $_POST['items_price'];
// echo "<br/>";
// echo $_POST['items_density'];
// echo "<br/>";
// echo $_POST['items_acidity'];
// echo "<br/>";
// echo $_POST['items_rating'];
// echo "<br/>";
// echo $_POST['items_country'];
// echo "<br/>";
// echo $_POST['items_taste'];
// echo "<br/>";
// echo $_POST['items_method'];
// echo "<br/>";
// echo $_POST['items_purpose'];
// echo "<br/>";
// echo $_POST['items_available'];
// echo "<br/>";
// $imgItem = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$descItem = filter_var(trim($_POST['items_description']), FILTER_SANITIZE_STRING);
// var_dump($_FILES);
// var_dump($_POST['images']);
// var_dump($imgItem);
$conn -> query("UPDATE `items` SET 
    `items_article` = '$articleItem',
    `items_name` = '$nameItem', 
    `items_description` = '$descItem', 
    `items_subdesc` = '$subdescItem',
    `items_category` = '$categoryItems', 
    `items_count` = '$countItem', 
    `items_price` = '$priceItem', 
    `items_density` = '$densityItem', 
    `items_acidity` = '$acidityItem', 
    `items_rating` = '$ratingItem', 
    `items_country` = '$countryItem', 
    `items_taste` = '$tasteItem', 
    `items_method` = '$methodItem', 
    `items_purpose` = '$purposeItem',
    `items_available` = '$availableItem'
    WHERE `items` . `items_article` = '$idItems'");

if(!empty($imgItem)):
    // var_dump($imgItem);
    foreach($imgItem as $key => $value) {
        if($value) {
            $conn -> query("INSERT INTO `items_images` (
                `item_id`,
                `item_image`
            ) VALUES (
                '$idItems',
                '$value'
            )");
        }
        };
        endif;
$conn -> close();
header("Location: /pages/account.php");