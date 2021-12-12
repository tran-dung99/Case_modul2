<?php
include_once "BaseModel.php";

class PostModel extends BaseModel
{
    protected $table = "posts";

    public function createPost($request) {
        $sql = "INSERT INTO $this->table(title,content,post_time,note,user_id,image,category) values 
(?,?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$request["title"]);
        $stmt->bindParam(2,$request["content"]);
        $stmt->bindParam(3,$request["post_time"]);
        $stmt->bindParam(4,$request["note"]);
        $stmt->bindParam(5,$request["user_id"]);
        $stmt->bindParam(6,$request["image"]);
        $stmt->bindParam(7,$request["category"]);
        $stmt->execute();
    }

    public function updatePost($request) {
        $sql = "UPDATE $this->table SET image=?, title=?,content=?,post_time=?,note=?,user_id=?,category=? WHERE id=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$request["image"]);
        $stmt->bindParam(2,$request["title"]);
        $stmt->bindParam(3,$request["content"]);
        $stmt->bindParam(4,$request["post_time"]);
        $stmt->bindParam(5,$request["note"]);
        $stmt->bindParam(6,$request["user_id"]);
        $stmt->bindParam(7,$request["category"]);
        $stmt->bindParam(8,$request["id"]);
        return $stmt->execute();
    }

    public function getByIdUser($id) {
        $sql = "SELECT * FROM $this->table WHERE user_id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function searchPost($key,$id) {
        $sql = "SELECT * FROM $this->table WHERE title like '%$key%' AND user_id like '%$id%'";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}