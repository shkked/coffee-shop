<?php
session_start();
include("../modules/db.php");

$promo = filter_var(trim($_POST['promo']), FILTER_SANITIZE_STRING);

$res = $conn -> query("SELECT * FROM `promo`");
// $res = $res -> fetch_assoc();
$conn -> close();

foreach($res as $key => $value) {
    if($value['promo_name'] == $promo) {
        $_SESSION['promo'] = intval($value['promo_discount'])/100;
        // echo intval($value['promo_discount'])/100;
        // var_dump($_SESSION['promo']);
    } else {
        $_SESSION['alertpromo'] = 'Неправильный промокод';
    }
}

header("Location: ".$_SERVER['HTTP_REFERER']);