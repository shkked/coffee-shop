<?php

include('db.php');

$userName = filter_var(trim($_GET['username']), FILTER_SANITIZE_STRING);
$userEmail = filter_var(trim($_GET['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_GET['pass']), FILTER_SANITIZE_STRING);
$password = md5($password);

$mass = $conn -> query("SELECT * FROM `users` WHERE `users_name` = '$userName' AND `users_email` = '$userEmail' AND `users_password` = '$password'");
$result = $mass -> fetch_assoc();
print_r($mass);
if($result){
    setcookie('id', $result['id'], time() + 3600, '/');
    setcookie('userName', $result['name'], time() + 3600, '/');
    setcookie('userEmail', $result['email'], time() + 3600, '/');
    setcookie('role', $result['role'], time() + 3600, '/');
}
$conn -> close();

header('Location: /ground-black');