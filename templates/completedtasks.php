<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Todo List</title>
    <script src="script.js" defer ></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-indigo-500 font-sans w-full ">
<section class="w-full mx-auto max-w-3xl flex justify-between items-center pt-4 pr-4">
    <h1 class="pl-4 pr-4 font-medium text-3xl text-white">
        <i class="fa-regular fa-clipboard fa-xs pr-2" style="color: #ffffff;"></i>Completed Tasks
    </h1>
    <div>
        <a href="/tasks" class="text-white font-medium"><<< Back to task list</a>
    </div>
</section>
<form id="create-task-form" action="" method="post" class="hidden">
    <div>
        <input type="text" name="title" placeholder="Enter Task Title">
    </div>
    <select name="priority_id" id="priority">
        <option value="1">Low</option>
        <option value="2">Medium</option>
        <option value="3">High</option>
    </select>
    <div>
        <button type="submit" id="create-task-button">Add task</button>
    </div>
</form>

<div class="bg-indigo-500 w-full p-4 mx-auto max-w-3xl">
    <ul class="space-y-4">
        <?php
        echo \App\ViewHelpers\ToDoViewHelper::displayCompletedTasks($tasks);
        ?>
    </ul>
</div>

</body>
</html>
