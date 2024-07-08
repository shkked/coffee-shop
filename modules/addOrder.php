<?php
session_start();
include("db.php");
if(isset($_SESSION['cartCost'])){
    $totalcost = $_SESSION['cartCost'];
}
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    $arr = [];
    foreach($_SESSION['cart'] as $key => $value){
        // $totalcost += $value['items_price'] * $value['count'];
        $arr[] = [$value['items_article'] => $value['count']];
    }
    // var_dump($arr);
    // echo "<br/>";
    foreach($arr as $key => $value){
        $article = array_keys($value)[0];
        $count = array_values($value)[0];
        $res = $conn -> query("UPDATE `items` 
        SET `items_count` = `items_count` - '$count' 
        WHERE `items_article` = '$article'");
    }

    $arr = json_encode($arr);
    // var_dump($arr);

}
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
$delivery = filter_var(trim($_POST['delivery']), FILTER_SANITIZE_STRING);
$payment = filter_var(trim($_POST['payment']), FILTER_SANITIZE_STRING);
$user = $_COOKIE['id'];
$date = date('Y-m-d');

// echo $address;

if($delivery == '1' || $payment == '2'){
    $totalcost = $totalcost + 1500;
}
if($delivery == 1){
    $delivery = "Курьер";
    $payment = "Курьеру";
} else if($delivery == 2){
    $delivery = "Пункт выдачи";
}
if($payment == 1){
    $payment = "Онлайн";
} else {
    $payment = "Курьеру";
};


$conn -> query("INSERT INTO `order-info` (
    `order_info`,
    `order_price`, 
    `order_name`,
    `order_email`,
    `order_tel`,
    `order_address`,
    `order_delivery`,
    `order_payment`,
    `order_status`, 
    `order_date`,
    `order_user`
) VALUES (
    '$arr',
    '$totalcost', 
    '$name', 
    '$email',
    '$tel', 
    '$address', 
    '$delivery', 
    '$payment', 
        1, 
    '$date',
    '$user'
);");
    
// $_SESSION['alertOrder'] = "Заказ оформлен";
$conn -> close();
unset($_SESSION['cart']);

header("Location: /pages/account.php");