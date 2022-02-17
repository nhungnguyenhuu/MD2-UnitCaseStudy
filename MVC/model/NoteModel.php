<?php

namespace MVC\model;

class NoteModel extends BaseModel
{
    public $tableName = "notes";

    public function getAll()
    {
        $sql = "select id, title, "
    }
    public function create($data)
    {
        $sql = "insert into from notes(title, content, ) values (?, ?, ?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["title"]);
        $stmt->bindParam(2, $data["content"]);
        $stmt->execute();
    }

}
