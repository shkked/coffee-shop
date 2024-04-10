<?php 

include('db.php');

$nameItem = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$articleItem = filter_var(trim($_POST['article']), FILTER_SANITIZE_STRING);
$purposeItem = filter_var(trim($_POST['purpose']), FILTER_SANITIZE_STRING);
$imgItem = $_FILES['img']['name'];
$descItem = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);
$subdescItem = filter_var(trim($_POST['subdesc']), FILTER_SANITIZE_STRING);
$countItem = filter_var(trim($_POST['count']), FILTER_SANITIZE_STRING);
$priceItem = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
$densityItem = filter_var(trim($_POST['density']), FILTER_SANITIZE_STRING);
$acidityItem = filter_var(trim($_POST['acidity']), FILTER_SANITIZE_STRING);
$ratingItem = filter_var(trim($_POST['rating']), FILTER_SANITIZE_STRING);
$countryItem = filter_var(trim($_POST['country']), FILTER_SANITIZE_STRING);
$tasteItem = filter_var(trim($_POST['taste']), FILTER_SANITIZE_STRING);
$methodItem = filter_var(trim($_POST['method']), FILTER_SANITIZE_STRING);
$availableItem = filter_var(trim($_POST['available']), FILTER_SANITIZE_STRING);
$categoryItem = filter_var(trim($_POST['cat']), FILTER_SANITIZE_STRING);
$categoryItems = (int)$categoryItem;



$conn -> query("INSERT INTO `items` (
    `items_article`,
    `items_name`, 
    `items_description`, 
    `items_subdesc`,
    `items_category`, 
    `items_count`, 
    `items_price`, 
    `items_density`, 
    `items_acidity`, 
    `items_rating`, 
    `items_country`, 
    `items_taste`, 
    `items_method`, 
    `items_purpose`,
    `items_available`
) VALUES (
    '$articleItem',
    '$nameItem', 
    '$descItem', 
    '$subdescItem',
    '$categoryItems', 
    '$countItem', 
    '$priceItem', 
    '$densityItem', 
    '$acidityItem', 
    '$ratingItem', 
    '$countryItem', 
    '$tasteItem', 
    '$methodItem', 
    '$purposeItem',
    '$availableItem'
);");

foreach ($imgItem as $key => $value) {
    // echo $value;
    $conn -> query("INSERT INTO `items_images` (
        `item_id`,
        `item_image`
    ) VALUES (
        '$articleItem',
        '$value'
    )");
    
    };
$conn -> close();

header('Location: /pages/catalog.php');