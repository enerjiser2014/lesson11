<?php

require_once __DIR__ . '/../models/NewsArticle.php';
require_once __DIR__ . '/../class/View.php';

class NewsController
{
    public function showArticle() {
        $id = $_GET['id'];
        $newsModel = new NewsArticle($this->siteConfig());
        $view = new View();
        $view->items = $newsModel->getOneRecord($id);
//        var_dump($view->items);
        $view->display('article_v.php');
    }
    public function addArticle()
    {
        $title = $_POST['title'];
        $text = $_POST['text'];
        $date = $_POST['date'];
        // здесь что-то, что обрабатывает $title, text, date перед отправкой
        $newsModel = new NewsArticle($this->siteConfig());
        $newsModel->addArticle($title, $text, $date);
        $this->actionAll();
    }
    public function actionAll()
    {
        $newsModel = new NewsArticle($this->siteConfig());
        $view = new View;
        $view->items = $newsModel->getAllRecords();
        $view->display('news_v.php');
        /*
        $items = $newsModel->getAllRecords();
        $this->render('news_v', ['items' => $items]);*/
    }

    protected function siteConfig()
    {
        return new Db(__DIR__ . '/../siteconfig.php');
    }

    protected function getTemplatePath() {
        return __DIR__ . '/../views/';
    }

    protected function render($template, $data)
    {
        //extract($data)
        foreach($data as $k => $v ) {
            $$k = $v;
        }
        require $this->getTemplatePath() . '/' . $template . '.php';
    }
}
