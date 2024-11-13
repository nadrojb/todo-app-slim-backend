<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class TasksController
{
    private $model;
    private $view;

    public function __construct(ToDoModel $model, PhpRenderer $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function __invoke($request, $response, $args)
    {
        $tasks = $this->model->getTasks();

        $parameters = ['tasks' => $tasks];

        return $this->view->render($response, "tasks.php", $parameters);

    }
}