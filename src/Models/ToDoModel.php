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
        $query = $this->db->prepare('SELECT * FROM `tasks`');
        $query->execute();
        return $query->fetchAll();
    }

}