<?php

namespace MVC\controller;


use MVC\model\Note_TypeModel;

class Note_typeController
{
    public $note_typeModel;

    public function __construct()
    {
        $this->note_typeModel = new Note_TypeModel();
    }

    public function getAll()
    {
        $noteTypes = $this->note_typeModel->getAll();
        include "MVC/view/note_type/read.php";

    }

    public function delete()
    {
        $this->note_typeModel->delete($_REQUEST["id"]);
        header("location:index.php?page=note_type-read");
    }

    public function getById()
    {
       $noteType= $this->note_typeModel->getById($_REQUEST["id"]);
       include "MVC/view/note_type/detail.php";
    }

    public function create()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            include "MVC/view/note_type/create.php";
        }else{
            $this->note_typeModel->create($_POST);
            header("location:index.php?page=note_type-read");
        }

    }

    public function update()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $noteType=$this->note_typeModel->getById($_REQUEST["id"]);
            include "MVC/view/note_type/edit.php";
        }else{
            $this->note_typeModel->update($_POST, $_REQUEST["id"]);

            header("location:index.php?page=note_type-read");
        }
    }

}