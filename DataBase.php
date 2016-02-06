<?php

/**
 * Created by PhpStorm.
 * User: pc
 * Date: 03.02.16
 * Time: 22:57
 */
class DataBase
{

    protected $db = null;
    private $host = 'localhost';
    private $name = 'root';
    private $pass = 'root';
    private $database = 'lesson';
    public $result;


    public function __construct()
    {
        $this->db = new mysqli($this->host, $this->name, $this->pass, $this->database) or die("ERROR: Нет соединения");
    }

    public function execute($sql)
    {
        $this->result = $this->db->query($sql);
    }

    public function fetchAll()
    {
        return $this->result->fetch_all();
    }

    public function fetchAssoc()
    {
        return $this->result->fetch_assoc();
    }


}