<?php

require_once './vendor/autoload.php';
use main\controllers\controller;
$controller = new controller();
$uri =parse_url($_SERVER['REQUEST_URI'])['path'] ;


switch($uri){
    case '/':
        $controller->listAction();
    break;
    case '/delete':
        $controller->deleteAction();

    break;
    case '/create':
        $controller->createAction();

    break;
    case '/update':
        $controller->callAction();
        $controller->updateAction();
    break;
}


