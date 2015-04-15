<?php

require_once __DIR__ . '/models/NewsArticle.php';

$obj = new NewsArticle(new Db());
var_dump($obj->getAllRecords());