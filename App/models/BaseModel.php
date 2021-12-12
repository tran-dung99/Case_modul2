<?php
include_once "DBConnect.php";

class BaseModel
{
    protected $connect;
    protected $table;

    public function __construct()
    {
        $dbConnect = new DBConnect();
        $this->connect = $dbConnect->connect();
    }

    public function getAll() {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($request) {
        $sql = "SELECT * FROM $this->table WHERE id=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$request["id"]);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delete($request) {
        $sql = "DELETE FROM $this->table WHERE id=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$request["id"]);
        $stmt->execute();
    }
}