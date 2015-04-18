<?php

require_once __DIR__ . '/../models/NewsArticle.php';

class NewsController
{
    public function actionAll()
    {
        $newsModel = new NewsArticle(new Db(__DIR__ . '/../siteconfig.php'));
        $items = $newsModel->getAllRecords();
        require __DIR__ . '/../views/news_v.php';
    }
}
