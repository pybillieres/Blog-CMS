<?php

namespace Pierre\P4\Framework;
abstract class Manager
{
    protected $_db;

    public function __construct()
    {
        $this->setDb();
    }

    public function setDb()
    {
        try
        {

        $db = new \PDO('mysql:host=db5000597044.hosting-data.io;dbname=dbs576180;charset=utf8;port=3306', 'dbu986463', 'nimier85SP/');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->_db = $db;
        }
        catch (\PDOException $e)
        {
                die('Erreur : ' . $e->getCode());
        }
}
}