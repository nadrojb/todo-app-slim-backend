<?php

namespace App\ViewHelpers;

class ToDoViewHelper
{

    public static function displayAllTasks ($tasks)
    {
        $taskDetail = "";

        foreach ($tasks as $task){

            $taskDetail .= ' <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-sm">';
            $taskDetail .= '<span>' . $task['title'] . '</span>';
            $taskDetail .= '<span>' . $task['datetime'] . '</span>';
            $taskDetail .= '<button class="text-red-500 hover:text-red-700">&#10003; &times;</button>';
            $taskDetail .= '</li>';
        }
        return $taskDetail;
    }
}