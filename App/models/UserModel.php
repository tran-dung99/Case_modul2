<?php
include_once "BaseModel.php";
class UserModel extends BaseModel
{
     protected $table = "users";

    public function checkLogin($email,$password) {
        $sql = "SELECT * FROM $this->table WHERE email=? AND password=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->bindParam(2,$password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }


    public function createUser($request) {
        $sql = "INSERT INTO $this->table(name,email,password,birthday,address,image,personal_Details) values 
(?,?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$request["name"]);
        $stmt->bindParam(2,$request["email"]);
        $stmt->bindParam(3,$request["password"]);
        $stmt->bindParam(4,$request["birthday"]);
        $stmt->bindParam(5,$request["address"]);
        $stmt->bindParam(6,$request["image"]);
        $stmt->bindParam(7,$request["personal_Details"]);
        $stmt->execute();
    }

    public function updateUser($request) {
        $sql = "UPDATE $this->table SET name=?,email=?,password=?,birthday=?,address=?,image=?,personal_Details=? WHERE id=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$request["name"]);
        $stmt->bindParam(2,$request["email"]);
        $stmt->bindParam(3,$request["password"]);
        $stmt->bindParam(4,$request["birthday"]);
        $stmt->bindParam(5,$request["address"]);
        $stmt->bindParam(6,$request["image"]);
        $stmt->bindParam(7,$request["personal_Details"]);
        $stmt->bindParam(8,$request["id"]);
        return $stmt->execute();
    }



    public function getByEmail($request) {
        $sql = "SELECT * FROM $this->table WHERE email=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$request["email"]);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}