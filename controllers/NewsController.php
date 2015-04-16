<?php

require_once __DIR__ . '/../models/NewsArticle.php';

class NewsController
{
    public function actionAll()
    {
        $newsModel = new NewsArticle(new Db(__DIR__ . '/../siteconfig.php'));
        $items = $newsModel->getAllRecords();
        var_dump($items);
    }
}
/*
$model = new NewsArticle(new Db(__DIR__ . '/../siteconfig.php'));

require_once __DIR__ . '/../views/news_v.php';