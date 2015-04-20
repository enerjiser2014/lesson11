<?php
require_once __DIR__ . '/../models/NewsArticle.php';
require_once __DIR__ . '/../class/Db.php';

$title = nl2br($_POST['title']);
$text = nl2br($_POST['text']);
$date = date('Y-m-d');
if (!empty($_POST)) {
    // + добавить проверку того что внутри $title, $text перед отправкой в фунцию
    $model = new NewsArticle(new Db(__DIR__ . '/../siteconfig.php'));
    $model->addArticle($title, $text, $date);

}
header('Location:' . '../controllers/NewsController.php')
?>