<?php

class DBConnect
{
    protected $dsn;
    protected $userName;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=manager_user;charset=utf8";
        $this->userName = "root";
        $this->password = "tranthidung";
    }

    public function connect() {
        try{
            $db = new PDO($this->dsn,$this->userName,$this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
        }catch(PDOException $e) {
            echo "ERROR".$e->getMessage();
        }
    }
}