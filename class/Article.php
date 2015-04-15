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
        $db = new Db();
        return $db->getRecords( 'SELECT * from ' . $this->getTable() );
    }

    public function getOneRecord()
    {
        return $this->getAllRecords()[0];
    }

}