<?php

class Db
{
    public function __construct()
    {
        $conf = include __DIR__ . '/../siteconfig.php';
        mysql_connect(
            $conf['dbhost'],
            $conf['dbuser'],
            $conf['dbpassword']
        );
        mysql_select_db($conf['dbname']);
    }

    final public function getRecords($sql)
    {
        $res = mysql_query($sql);
        if (false == $res ) {
            return false;
        }
        $ret[] = '';
        while( $row = mysql_fetch_array($res) ) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function getRecord($sql)
    {
        return $this->getRecords($sql)[0];
    }
}