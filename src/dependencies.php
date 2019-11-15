<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };
    $container['dbConnection'] = function($c) {
        $settings = $c->get('settings')['db'];
        $db = new \PDO($settings['host'].$settings['dbname'], $settings['userName'], $settings['password']);
        return $db;
    };

    $container['ToDoModel'] = new LukeNamespace\Models\ToDoModel();
   // $container['AddToDoController'] = new LukeNamespace\Factories\AddToDoControllerFactory();
     $container['GetAllToDosController'] = new LukeNamespace\Factories\GetAllToDoControllerFactory();
    // $container['SetToDoCompleteController'] = new LukeNamespace\Factories\SetToDoCompleteControllerFactory();
   //  $container['UpdateToDoByIdController'] = new LukeNamespace\Factories\UpdateToDoByIdControllerFactory();
   //  $container['DeleteToDoByIdController'] = new LukeNamespace\Factories\DeleteToDoByIdControllerFactory();
};
