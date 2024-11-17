<?php

namespace App\Models;

use PDO;

class ToDoModel
{

    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks()
    {
        $query = $this->db->prepare('SELECT `id`, `title`, `priority_id`, `completed` FROM `tasks` WHERE `completed` = 0');
        $query->execute();
        return $query->fetchAll();
    }

    public function addTasks($task)
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`title`, `priority_id`, `completed`) 
                                    VALUES (:title, :priority_id, 0)');
        $query->execute([
            'title' => $task['title'],
            'priority_id' => $task['priority_id'],
        ]);
    }
    public function deleteTask(int $taskId)
    {
        $query = $this->db->prepare('DELETE FROM `tasks` WHERE id = :id');
        $query->execute(['id' => $taskId]);
    }

    public function completeTask(int $taskId)
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `completed` = 1 WHERE `id` = :id');
        $query->execute(['id' => $taskId]);
    }

    public function getCompletedTasks()
    {
        $query = $this->db->prepare('SELECT `id`, `title`, `priority_id` FROM `tasks` WHERE `completed` = 1');
        $query->execute();
        return $query->fetchAll();
    }
}
