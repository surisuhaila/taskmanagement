<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mytask.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container my-4">
        <h1 class="mb-4">My Tasks</h1>

        <table class="table table-dark table-striped" id="taskTable">
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Category</th>
                    <th>Due Date</th>
                    <th>Status</th>
                </tr>
            </thead>

           
            <tbody id="taskTableBody">
                <tr>
                    <td>Study CTU554</td>
                    <td>Do Final Year Paper</td>
                    <td>12/12/2024</td>
                    <td>Pending</td>
                </tr>
            </tbody>
        </table>

    
        <form id="taskForm">
            <div class="mb-3">
                <label for="taskName" class="form-label">Task Name</label>
                <input type="text" class="form-control" id="taskName" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" required>
            </div>

            <div class="mb-3">
                <label for="dueDate" class="form-label">Due Date</label>
                <input type="date" class="form-control" id="dueDate" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" required>
            </div>

            <button type="submit" class="btn btn-success">Add Task</button>
        </form>
    </div>

<script>

    function loadTasks() {
        const tasks = JSON.parse(localStorage.getItem("tasks")) || [];
        const tableBody = document.getElementById('taskTableBody');
        tableBody.innerHTML = "";

        tasks.forEach(task => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${task.name}</td>
                <td>${task.category}</td>
                <td>${task.dueDate}</td>
                <td>${task.status}</td>
            `;
            tableBody.appendChild(row);
        });
    }

    const taskForm = document.getElementById('taskForm');

    taskForm.addEventListener('submit', function(e){
        e.preventDefault();

        const name = document.getElementById('taskName').value;
        const category = document.getElementById('category').value;
        const dueDate = document.getElementById('dueDate').value;
        const status = document.getElementById('status').value;

        let tasks = JSON.parse(localStorage.getItem("tasks")) || [];

        tasks.push({
            name: name,
            category: category,
            dueDate: dueDate,
            status: status
        });

        localStorage.setItem("tasks", JSON.stringify(tasks));

        loadTasks();

        taskForm.reset();
    });

    loadTasks();
</script>

</body>
</html>
