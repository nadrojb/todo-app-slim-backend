<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;


class TasksAddTaskController
{
    private $model;

    private $view;


    //type hinting. when this controller is made then the dependency injector will see the tpe hint, it goes oh the controller needs a ToDoModel then will go find it.
    public function __construct(ToDoModel $model, PhpRenderer $view)
    {
        $this->model = $model;
        $this->view = $view;

    }


    public function __invoke ($request, $response, $args)
    {

        $data = $request->getParsedBody();
        // future self, put some validation here
        $this->model->addTasks($data);
        $tasks = $this->model->getTasks();
        $parameters = ['tasks' => $tasks];

        return $this->view->render($response, "tasks.php", $parameters);
    }

}