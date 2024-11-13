<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Todo List</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans w-full">

  <div class="bg-white shadow-lg rounded-lg w-96 p-6 mx-auto">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Todo List</h1>

    <div class="flex space-x-2 mb-6">
      <input type="text" placeholder="Enter new task" class="flex-1 p-2 border border-gray-300 rounded-md" />
      <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Add</button>
    </div>

    <ul class="space-y-4">
        <?php
        echo \App\ViewHelpers\ToDoViewHelper::displayAllTasks($tasks);
        ?>
    </ul>
  </div>

</body>
</html>
