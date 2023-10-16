<?php

include('db.php');

$fullName = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$userName = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$userEmail = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$password = md5($password . "phptest");

$conn -> query("INSERT INTO `users` (`name`, `username`, `password`, `email`, `role`) VALUES ('$fullName', '$userName', '$password', '$userEmail', 2)");
$conn -> close();

header('Location: /php');