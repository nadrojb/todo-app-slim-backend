<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Todo List</title>
    <script src="script.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="bg-indigo-500 font-sans w-full">
<section class="w-full mx-auto max-w-3xl flex justify-between items-center pt-4">
    <h1 class="pl-4 pr-4 font-medium text-3xl text-white">
        <i class="fa-regular fa-clipboard fa-xs pr-2" style="color: #ffffff;"></i>Task List
    </h1>
    <div>
        <a href="/completed" class="text-white font-medium">View completed tasks >>></a>
    </div>
</section>

<div>
</div>
<form id="create-task-form" action="" method="post" class="hidden z-10 mx-auto max-w-3xl p-6 bg-white rounded-lg shadow-md">
    <div class="mb-4">
        <input type="text" name="title" placeholder="Enter Task Title"
               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" />
    </div>
    <div class="mb-4">
        <select name="priority_id" id="priority"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
            <option value="1">Low</option>
            <option value="2">Medium</option>
            <option value="3">High</option>
        </select>
    </div>
    <div>
        <button type="submit" id="create-task-button"
                class="w-full p-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            Add Task
        </button>
    </div>
</form>

<div class="bg-indigo-500 w-full p-4 mx-auto max-w-3xl">
    <ul class="space-y-4">
        <?php
        echo \App\ViewHelpers\ToDoViewHelper::displayAllTasks($tasks);
        ?>
    </ul>
</div>
<div class="p-4 absolute bottom-1 right-1/2 w-full max-w-3xl translate-x-1/2">
    <button id="add-task-button"
            class="p-4 rounded-lg text-white bg-indigo-600 w-full text-left font-medium active:bg-white active:text-indigo-600 active:ease-in">
        &#x2b; Add task
    </button>
</div>


</body>
</html>
