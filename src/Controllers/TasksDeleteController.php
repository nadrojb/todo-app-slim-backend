<?php

namespace App\Controllers;

use App\Models\ToDoModel;

class TasksDeleteController
{
    private $model;

    public function __construct(ToDoModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $taskId = $args['id'];

        $this->model->deleteTask($taskId);

        return $response->withHeader('Location', '/tasks')->withStatus(301);
    }

}
