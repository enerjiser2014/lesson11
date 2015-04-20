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
        include(__DIR__ . '/../views/' . $template);
    }
}