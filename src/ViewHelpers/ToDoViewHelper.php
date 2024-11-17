<?php

namespace App\ViewHelpers;

class ToDoViewHelper
{

    public static function displayAllTasks($tasks)
    {
        $taskDetail = "";

        foreach ($tasks as $task) {

            $taskDetail .= ' <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">';
            $taskDetail .= '<span>' . $task['title'] . '</span>';
            $taskDetail .= '<form action="/completed/' . $task['id'] .'" method="POST" >
                            <input type="submit" placeholder="Complete" value="complete">
                            </form>';
            $taskDetail .= '</li>';
        }
        return $taskDetail;
    }

    public static function displayCompletedTasks($tasks)
    {
        $taskDetail = "";

        foreach ($tasks as $task) {

            $taskDetail .= ' <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">';
            $taskDetail .= '<span>' . $task['title'] . '</span>';
            $taskDetail .= '<form action="/deleted/' . $task['id'] .'" method="POST" >
                            <input type="submit" placeholder="delete">
                            </form>';
            $taskDetail .= '</li>';
        }
        return $taskDetail;
    }
}