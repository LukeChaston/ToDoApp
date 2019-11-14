<?php
namespace LukeNamespace\Controllers;

class GetAllToDoController
{
    private $Renderer;
    private $TaskToDo;

    public function __construct($Renderer, $TaskToDo)
    {
        $this->Renderer = $Renderer;
        $this->TaskToDo = $TaskToDo;
    }

    public function __invoke($request, $response, $args)
    {
        $args['task'] = $this->TaskToDo->getTaskById($args['id']);
        return $response->withJson($args['task'], 200);
    }
}