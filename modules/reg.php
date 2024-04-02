<?php

include('db.php');

$fullName = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$telName = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$userEmail = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$password = md5($password . "ground-black");

$conn -> query("INSERT INTO `users` (
    `users_name`, 
    `users_tel`, 
    `users_email`, 
    `users_pass`, 
    `users_role`
    ) VALUES (
        '$fullName', 
        '$telName', 
        '$userEmail', 
        '$password', 
        2
    )");
$conn -> close();

header('Location: /');