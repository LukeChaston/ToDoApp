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
        $db = new \PDO("mysql:host=127.0.0.1;dbname=ToDoList", 'root', 'password');
        $query = $db->prepare("SELECT `id`,`Task` FROM `ToDo`");
        $query->bindParam(':id', $id);
        $query->execute();
        $results = $query->fetch();
        return $results;
    }

    public function getAllToDos()
    {

    }
    public function setToDoComplete()
    {

    }
    public function updateToDoById()
    {

    }
    public function deleteToDoById()
    {

    }
}