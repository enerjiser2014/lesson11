<?php

class View
    implements Countable
{
    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function count()
    {
        return count($this->data);
    }

    public function display($template)
    {
        extract($this->data);
        ob_start();
        include(__DIR__ . '/../views/' . $template);
        $content = ob_get_contents();
        ob_end_clean();
        // обрабатываем регулярным выражением
        // .. здесь будет еще код
        echo $content;
    }
}