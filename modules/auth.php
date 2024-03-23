<?php

include('db.php');


$userEmail = filter_var(trim($_GET['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_GET['pass']), FILTER_SANITIZE_STRING);
$password = md5($password . "ground-black");

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
    
header('Location: /');