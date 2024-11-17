<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class GetCompletedTasksController
{
    private $model;
    private $view;

    public function __construct(ToDoModel $model, PhpRenderer $view)
    {
        $this->view = $view;
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $tasks = $this->model->getCompletedTasks();
        $args = ['tasks' => $tasks];
        return $this->view->render($response, "completedtasks.php", $args);
    }
}