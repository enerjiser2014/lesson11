<?php

require_once __DIR__ . '/../models/NewsArticle.php';

$model = new NewsArticle(new Db());

require_once __DIR__ . '/../views/news_v.php';