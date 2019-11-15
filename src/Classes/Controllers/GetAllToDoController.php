<?php
namespace LukeNamespace\Controllers;


class GetAllToDoController
{
    private $renderer;
    private $ToDoModel;

    public function __construct($renderer, $ToDoModel)
    {
        $this->renderer = $renderer;
        $this->ToDoModel= $ToDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $args['task'] = $this->ToDoModel->getAllToDo();
        return $response->withJson($args['task']);
    }
}