document.addEventListener("DOMContentLoaded", function () {
    const inputTaskForm = document.getElementById("input-task-form");
    const inputTask = document.getElementById("input-task");
    const taskList = document.getElementById("task-list");
    const AddTask = document.getElementById("submit-task");
    AddTask.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent form submission

        const taskText = inputTask.value.trim();
        if (taskText !== "") {
            const taskDiv = document.createElement("div");
            taskDiv.classList.add("task");

            const taskInput = document.createElement("input");
            taskInput.type = "text";
            taskInput.value = taskText;
            taskInput.readOnly = true;
            taskInput.id="text";
            taskInput.addEventListener("mouseout",function(){
                taskInput.readOnly = true;
            })
            const checkbox = document.createElement("input");
            checkbox.type="checkbox";
            checkbox.id = "checkbox";

            const editButton = document.createElement("button");
            editButton.textContent = "Edit";
            editButton.id = "edit";
            editButton.addEventListener("click", function () {
                taskInput.readOnly = false;
                taskInput.focus();
            });

            const deleteButton = document.createElement("button");
            deleteButton.textContent = "Delete";
            deleteButton.id = "delete"
            deleteButton.addEventListener("click", function () {
                taskDiv.remove();
            });

            taskDiv.appendChild(taskInput);
            taskDiv.appendChild(checkbox);
            taskDiv.appendChild(editButton);
            taskDiv.appendChild(deleteButton);
         
            taskList.appendChild(taskDiv);

            inputTask.value = ""; // Clear the input field
        }
    });
});