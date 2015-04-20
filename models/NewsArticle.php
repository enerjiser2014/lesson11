<?php

require_once __DIR__ . '/../class/Article.php';

class NewsArticle
    extends Article
{

    protected function getTable()
    {
        return 'news';
    }
} 