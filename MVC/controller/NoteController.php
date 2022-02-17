<?php

namespace MVC\controller;

use MVC\model\Note_TypeModel;
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
            $noteTypeModel = new Note_TypeModel();
            $noteTypes = $noteTypeModel->getAll();
            include "MVC/view/note/create.php";
        }else{
            $this->noteModel->create($_POST);
            header("location:index.php?page=note-read");
        }
    }

    public function update()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $noteTypeModel = new Note_TypeModel();
            $noteTypes = $noteTypeModel->getAll();
            $note = $this->noteModel->getById($_REQUEST["id"]);
            include "MVC/view/note/edit.php";
        }else{
            $this->noteModel->update($_POST, $_REQUEST["id"]);
            header("location:index.php?page=note-read");
        }
    }

}