<?php
declare(strict_types=1);


use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/tasks', \App\Controllers\TasksController::class);

    $app->post('/tasks', \App\Controllers\TasksAddTaskController::class);
};
