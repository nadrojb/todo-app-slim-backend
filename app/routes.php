<?php
declare(strict_types=1);


use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/tasks', \App\Controllers\TasksController::class);
    $app->post('/tasks', \App\Controllers\AddTasksController::class);
    $app->get('/completed', \App\Controllers\GetCompletedTasksController::class);
    $app->post('/completed/{id}', \App\Controllers\CompleteTasksController::class);
    $app->post('/deleted/{id}', \App\Controllers\DeleteTasksController::class);
};
