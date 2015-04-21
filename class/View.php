<?php

class View
    implements Countable, Iterator
{
    protected $position;
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
        //ob_start();
        include(__DIR__ . '/../views/' . $template);
        //$content = ob_get_contents();
        //ob_end_clean();
        // обрабатываем регулярным выражением
        // .. здесь будет еще код
        //echo $content;
    }

    public function __construct() {
        $this->position = 0;
    }

    public function current()
    {
        // TODO: Implement current() method.
        current($this->data);

    }

    public function next()
    {
        // TODO: Implement next() method.
        next($this->data);
    }

    public function key()
    {
        // TODO: Implement key() method.
        key($this->data);
    }

    public function valid()
    {
        // TODO: Implement valid() method.
        return false !== current($this->data);
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
        reset($this->data);
    }
}