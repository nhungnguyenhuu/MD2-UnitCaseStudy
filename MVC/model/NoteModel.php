<?php

namespace MVC\model;

class NoteModel extends BaseModel
{
    public $tableName = "notes";

    public function getAll()
    {
        $sql = "select notes.id, title, content ,note_type.name as name from notes
                join note_type on type_id=note_type.id ";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select notes.id, title, content ,note_type.name as name from notes
                join note_type on type_id=note_type.id where notes.id = $id ";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
    public function create($data)
    {
        $sql = "insert into notes(title, content, type_id ) values (?, ?, ?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["title"]);
        $stmt->bindParam(2, $data["content"]);
        $stmt->bindParam(3, $data["name"]);
        $stmt->execute();
    }

    public function update($data, $id)
    {
        $sql = "update notes set title =?, content = ?, type_id = ? where id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["title"]);
        $stmt->bindParam(2, $data["content"]);
        $stmt->bindParam(3, $data["name"]);
        $stmt->execute();
    }

}
