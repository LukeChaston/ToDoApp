<?php
namespace LukeNamespace\Models;


class ToDoModel
{
    private $db;

    public function __construct($db)
    {
        $this->db=$db;
    }

    public function addToDo()
    {
        $this->db=$db;
    }

    public function getAllToDos()
    {
        $this->db=$db;
    }
    public function setToDoComplete()
    {
        $this->db=$db;
    }
    public function updateToDoById()
    {
        $this->db=$db;
    }
    public function deleteToDoById()
    {
        $this->db=$db;
    }
}