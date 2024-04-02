<?php

include('db.php');
$id = $_COOKIE['id'];
$oldpass = filter_var(trim($_POST['oldpass']), FILTER_SANITIZE_STRING);
$oldpass = md5($oldpass . "ground-black");
$newpass = filter_var(trim($_POST['newpass']), FILTER_SANITIZE_STRING);

$mass = $conn -> query("SELECT * FROM `users` WHERE `users_id` = '$id'");
$result = $mass -> fetch_assoc();
if($result && $oldpass === $result['users_pass']):
    $newpass = md5($newpass . "ground-black");
    $conn -> query("UPDATE `users` SET `users_pass` = '$newpass' WHERE `users_id` = $id ");
    $conn -> close();
    header('Location: /pages/account.php'); 
else:
    echo "Неверный пароль";
endif;