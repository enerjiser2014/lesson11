<?php

require_once __DIR__ . '/Db.php';

abstract class Article
{
    abstract protected function getTable();

    protected $db;

    public function __construct(Db $db) {
        $this->db = $db;
    }

    public function getAllRecords()
    {
        return $this->db->getRecords( 'SELECT * from ' . $this->getTable() );
    }

    public function getOneRecord($id)
    {
        return $this->getAllRecord('SELECT * from ' . $this->getTable() . 'WHERE id="' . $id . '"' )[0];
    }

    public function addArticle($title, $text, $date)
    {
        $sql = 'INSERT INTO ' . $this->getTable() . ' (text, title, date) VALUES(\'' . $text . '\',\'' . $title . '\',\'' . $date . '\')';
        return $this->db->sqlExec($sql);
    }

}