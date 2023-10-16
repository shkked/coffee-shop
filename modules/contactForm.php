<?php


include('db.php');

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$question = filter_var(trim($_POST['question']), FILTER_SANITIZE_STRING);
$message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

$conn -> query("INSERT INTO `contactus` (`name`, `email`, `question`, `message`) VALUES ('$name', '$email', '$question', '$message')");
$conn -> close();

header('Location: /php/pages/contactus.php');