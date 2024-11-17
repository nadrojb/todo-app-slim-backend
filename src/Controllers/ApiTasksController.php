<?php

namespace App\Controllers;
use App\Models\ToDoModel;
class ApiTasksController
{
    private $model;


    public function __construct(ToDoModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $product = $this->model->getTasks();
        return $response->withJson($product, 200);
    }
}