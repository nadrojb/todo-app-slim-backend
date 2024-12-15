<?php

namespace App\ViewHelpers;

class ToDoViewHelper
{

    public static function displayAllTasks($tasks): string
    {
        $taskDetail = "";

        foreach ($tasks as $task) {

            $taskDetail .= ' <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">';
            $taskDetail .= '<span>' . $task['title'] . '</span>';
            $taskDetail .= '<form action="/completed/' . $task['id'] .'" method="POST" >
                            <input type="submit" placeholder="Complete" value="Check" class="cursor-pointer bg-indigo-600 py-2 px-4 text-sm text-white rounded-md">
                            </form>';
            $taskDetail .= '</li>';
        }
        return $taskDetail;
    }

    public static function displayCompletedTasks($tasks): string
    {
        $taskDetail = "";

        foreach ($tasks as $task) {

            $taskDetail .= ' <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">';
            $taskDetail .= '<span>' . $task['title'] . '</span>';
            $taskDetail .= '<form action="/deleted/' . $task['id'] .'" method="POST" >
                            <input type="submit" placeholder="delete" value="Delete" class="cursor-pointer bg-indigo-600 py-2 px-4 text-sm text-white rounded-md">
                            </form>';
            $taskDetail .= '</li>';
        }
        return $taskDetail;
    }
}