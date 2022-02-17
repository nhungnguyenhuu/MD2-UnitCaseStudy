<?php
namespace MVC\model;

use PDO;

class BaseModel
{
    public $connect;
    public $tableName;
    public function __construct()
    {
        $db = new DBConnection();
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from $this->tableName";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select * from $this->tableName where id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $sql = "delete from $this->tableName where id = $id";
        $this->connect->query($sql);
    }

}