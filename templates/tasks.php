<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 font-sans w-full">
<form action="" method="post">
    <div>
        <input type="text" name="title" placeholder="Enter Task Title">
    </div>
    <select name="priority_id" id="priority">
        <option value="1">Low</option>
        <option value="2">Medium</option>
        <option value="3">High</option>
    </select>
    <div>
        <button type="submit">Add Task</button>
    </div>
</form>

<div class="bg-white shadow-lg rounded-lg w-96 p-6 mx-auto">
    <ul class="space-y-4">
        <?php
        echo \App\ViewHelpers\ToDoViewHelper::displayAllTasks($tasks);
        ?>
    </ul>
</div>


</body>
</html>
