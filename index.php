<?php

use MVC\controller\NoteController;
use MVC\model\NoteModel;

require "vendor/autoload.php";


$noteController = new NoteController();


$page = $_GET["page"]??"";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="">Note_type</a>
<a href="index.php?page=note-read">Note</a>
<?php
switch ($page){
    case "note-read":
        $noteController->getAll();
        break;
    case "note-detail":
        $noteController->getById();
        break;
    case "note-delete":
        $noteController->delete();
        break;
    case "note-create":
        $noteController->create();
        break;
    case "note-edit":
        $noteController->update();
        break;

    default:
}
?>
</body>
</html>
