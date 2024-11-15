"use strict";

let addTaskButton = document.querySelector("#add-task-button");
let createTaskButton = document.querySelector("#create-task-button");
let createTaskForm = document.querySelector("#create-task-form");
addTaskButton.addEventListener('click', () => {
    createTaskForm.classList.remove("hidden");
})

createTaskButton.addEventListener("click", () => {
    createTaskForm.classList.add("hidden");
})
