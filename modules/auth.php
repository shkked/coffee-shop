<?php
session_start();
include('db.php');


$userEmail = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$password = md5($password . "v91670iu_groundb");

$checkEmail = $conn -> query("SELECT * FROM `users` WHERE `users_email` = '$userEmail'");
$checkEmail = $checkEmail -> fetch_assoc();

$checkpass = $conn -> query("SELECT * FROM `users` WHERE `users_pass` = '$password' AND `users_email` = '$userEmail'");
$checkpass = $checkpass -> fetch_assoc();

if(!$checkEmail){
        $_SESSION['alertauth'] = "Неправильно введена почта";
        header("Location: ".$_SERVER['HTTP_REFERER']);
        die;
}
if(!$checkpass){
        $_SESSION['alertauth'] = "Неправильно введен пароль";
        header("Location: ".$_SERVER['HTTP_REFERER']);
        die;
}

$mass = $conn -> query("SELECT * FROM `users` WHERE `users_email` = '$userEmail' AND `users_pass` = '$password'");
$result = $mass -> fetch_assoc();
$conn -> close();
print_r($result);
if($result):
        setcookie('id', $result['users_id'], time() + 3600, '/');
        setcookie('userName', $result['users_name'], time() + 3600, '/');
        setcookie('userEmail', $result['users_email'], time() + 3600, '/');
        setcookie('role', $result['users_role'], time() + 3600, '/');
endif;
    
header("Location: ".$_SERVER['HTTP_REFERER']);