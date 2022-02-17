<?php

namespace MVC\controller;

use MVC\model\NoteModel;

class NoteController
{
    public $noteModel;

    public function __construct()
    {
        $this->noteModel = new NoteModel();
    }

    public function getAll()
    {
        $notes = $this->noteModel->getAll();
        include "MVC/view/note/read.php";

    }

    public function getById()
    {
        $note = $this->noteModel->getById($_REQUEST["id"]);

        include "MVC/view/note/detail.php";
    }

    public function delete()
    {
         $this->noteModel->delete($_REQUEST["id"]);
        header("location:index.php?page=note-read");
    }

    public function create()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            include "MVC/view/note/read.php";
        }else{
            $data= [
                "title" => $_REQUEST["title"],
                "content" => $_REQUEST["content"]
            ];
            $this->noteModel->create($data);
            header("location:index.php?page=note-read");
        }
    }

}