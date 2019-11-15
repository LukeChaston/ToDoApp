<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/','GetAllToDosController');
    // $app->get('/add','AddToDoController');
   //  $app->get('/complete','SetToDoCompleteController');
   //  $app->get('/update','UpdateToDoByIdController');
    // $app->get('/delete','DeleteToDoByIdController');
};
