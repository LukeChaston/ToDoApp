<?php
namespace LukeNamespace\Factories;
use LukeNamespace\Controllers\GetAllToDoController;
use Psr\container\ContainerInterface;

class GetAllToDoControllerFactory
{
    public function __invoke(ContainerInterface $container) : GetAllToDoController
    {
        $ToDoModel = $container->get('ToDoModel');
        $renderer = $container->get('renderer');
        return new GetAllToDoController($renderer, $ToDoModel);
    }
}