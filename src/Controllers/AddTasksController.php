<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;


class AddTasksController
{
    private $model;




    //type hinting. when this controller is made then the dependency injector will see the tpe hint, it goes oh the controller needs a ToDoModel then will go find it.
    public function __construct(ToDoModel $model, PhpRenderer $view)
    {
        $this->model = $model;
    }


    public function __invoke($request, $response, $args)
    {
        $data = $request->getParsedBody();
        // future self, put some validation here
        $this->model->addTasks($data);
        return $response->withHeader('Location', '/tasks')->withStatus(301);
    }
}
