<?php 

include('db.php');

$nameArticle = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$textArticle = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);
$imgArticle = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
$authorArticle = $_COOKIE['id'];


echo $nameArticle;
echo "</br>";
echo $textArticle;
echo "</br>";
echo $imgArticle;
echo "</br>";
echo $authorArticle;
echo "</br>";




$conn -> query("INSERT INTO `articles` (
    `articles_img`,
    `articles_name`, 
    `articles_text`, 
    `articles_author`
) VALUES (
    '$imgArticle',
    '$nameArticle', 
    '$textArticle', 
    '$authorArticle'
);");
$conn -> close();

header('Location: /pages/articles.php');