<?php

include('db.php');

$fullName = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$img = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$telName = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$userEmail = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$password = md5($password . "ground-black");

$conn -> query("INSERT INTO `users` (
    `users_img`,
    `users_name`, 
    `users_tel`, 
    `users_email`, 
    `users_pass`, 
    `users_role`
    ) VALUES (
        '$img',
        '$fullName', 
        '$telName', 
        '$userEmail', 
        '$password', 
        2
    )");
$arr = $conn -> query("SELECT * FROM `users` WHERE `users_name` = '$fullName'");
$result = $arr -> fetch_assoc();
if($arr):
        setcookie('id', $result['users_id'], time() + 3600, '/');
        setcookie('userName', $result['users_name'], time() + 3600, '/');
        setcookie('userEmail', $result['users_email'], time() + 3600, '/');
        setcookie('role', $result['users_role'], time() + 3600, '/');
endif;
$conn -> close();

header('Location: /');