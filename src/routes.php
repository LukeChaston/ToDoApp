<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });
    $app->get('/','GetAllToDosController');
    $app->get('/add','AddToDoController');
    $app->get('/complete','SetToDoCompleteController');
    $app->get('/update','UpdateToDoByIdController');
    $app->get('/delete','DeleteToDoByIdController');
};
