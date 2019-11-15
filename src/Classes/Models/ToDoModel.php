<?php
namespace LukeNamespace\Models;


class ToDoModel
{
    private $db;

    public function __construct()
    {
        $this->db = $db;
    }

    public function getAllToDo()
    {
        $db = new \PDO("mysql:host=127.0.0.1;dbname=ToDoList", 'root', 'password');
        $query = $db->prepare("SELECT `id`,`Task` FROM `ToDo`");
        $query->bindParam(':id', $id);
        $query->execute();
        $results = $query->fetchAll();
        return $results;
    }
}

  /*  public function addToDos()
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
  */