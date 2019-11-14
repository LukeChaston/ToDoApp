<?php
namespace LukeNamespace\Factories;
use LukeNamespace\Controllers\GetAllToDoController;
use Psr\container\ContainerInterface;

class GetAllToDoControllerFactory
{
    public function __invoke(ContainerInterface $container) : GetAllToDoController
    {
        $TaskToDo = $container->get('ToDoModel');
        $renderer = $container->get('Renderer');
        return new GetAllToDoController($TaskToDo, $renderer);
    }
}