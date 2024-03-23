<?php

include('db.php');
$id = $_COOKIE['id'];
$oldpass = filter_var(trim($_GET['oldpass']), FILTER_SANITIZE_STRING);
$oldpass = md5($oldpass . "ground-black");
$newpass = filter_var(trim($_GET['newpass']), FILTER_SANITIZE_STRING);

$mass = $conn -> query("SELECT * FROM `users` WHERE `users_id` = '$id'");
$result = $mass -> fetch_assoc();
$conn -> close();
if($result && $oldpass == $result['users_pass']):
    $newpass = md5($newpass . "ground-black");
    echo $newpass . " " . $oldpass . " " . $result['users_pass'];
    echo "</br>";
    echo $id;
    $conn -> query("UPDATE `users` SET `users_pass` = '$newpass' WHERE `users` . `users_id` = '$id' ");
    $conn -> close();
    // echo "ПОлучилось";
    // header('Location: /pages/account.php');
endif;