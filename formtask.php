<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/formtask.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form>
        <div class="mb-3">
            <label for="InputTaskName" class="form-label">Task Name</label>
            <input type="task name" class="form-control" id="InputTaskName" aria-describedby="task name">
        </div>

        <div class="mb-3">
            <label for="InputCategory" class="form-label">Category</label>
            <input type="category" class="form-control" id="InputCategory">
        </div>

        <div class="mb-3">
            <label for="InputDueDate" class="form-label">Due Date</label>
            <input type="due date" class="form-control" id="InputDueDate">
        </div>

        <div class="mb-3">
            <label for="InputDescription" class="form-label">Description</label>
            <input type="description" class="form-control" id="InputDescription">
        </div>

        <div class="mb-3">
            <label for="InputStatus" class="form-label">Status</label>
            <input type="status" class="form-control" id="InputStatus">
        </div>

        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>
</body>
</html>