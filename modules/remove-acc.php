<?php

include('db.php');

$idItem = filter_var(trim($_GET['id']), FILTER_SANITIZE_STRING);
$idItems = (int)$idItem;
echo $idItems;
$conn -> query("DELETE FROM `users` WHERE `users_id` = '$idItems'");
$conn -> close();

setcookie('id', 0, time() - 3600, '/');
setcookie('userName', 0, time() - 3600, '/');
setcookie('userEmail', 0, time() - 3600, '/');
setcookie('role', 0, time() - 3600, '/');

header("Location: /");