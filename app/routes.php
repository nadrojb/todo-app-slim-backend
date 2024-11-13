<?php
declare(strict_types=1);


use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    //demo code - two ways of linking urls to functionality, either via anon function or linking to a controller



    $app->get('/tasks', \App\Controllers\TasksController::class);

};
