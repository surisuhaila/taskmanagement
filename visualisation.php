<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Visualisation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #a09d80ff;
        }

        .container-fluid {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 220px;
            background-color: #525734ff;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            margin: 10px 0;
            color: #525734ff;
            background-color: #a09d80ff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
        }

        .sidebar a:hover {
            background-color: white;
            transform: translateX(4px);
        }

        .main {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        header {
            background-color: #ffffff;
            padding: 15px 20px;
            border-radius: 8px;
            border-left: 6px solid #525734ff;
            margin-bottom: 20px;
        }

        header h1 {
            color: #525734ff;
            font-weight: 700;
        }

        .chart-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            border-left: 6px solid #a09d80ff;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Task Manager</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="mytask.php">My Tasks</a>
        <a href="visualisation.php">Visualisation</a>
        <a href="profile.php">Profile</a>
    </div>

    <!-- MAIN -->
    <div class="main">
        <header>
            <h1>Task Visualisation</h1>
        </header>

        <div class="chart-container">
            <h4>Total vs Completed Tasks</h4>
            <canvas id="barChart"></canvas>
        </div>

        <div class="chart-container">
            <h4>Tasks per Category</h4>
            <canvas id="pieChart"></canvas>
        </div>
    </div>
</div>

<script>
    // Ambil tasks dari localStorage
    const tasks = JSON.parse(localStorage.getItem("tasks")) || [];

    // Data for bar chart: Completed vs Pending
    const completedCount = tasks.filter(t => t.status.toLowerCase() === "completed").length;
    const pendingCount = tasks.filter(t => t.status.toLowerCase() !== "completed").length;

    const barCtx = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Pending', 'Completed'],
            datasets: [{
                label: 'Tasks',
                data: [pendingCount, completedCount],
                backgroundColor: ['#a09d80ff', '#525734ff']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: { display: true, text: 'Task Status Overview' }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Data for pie chart: Tasks per Category
    const categories = [...new Set(tasks.map(t => t.category))];
    const categoryCounts = categories.map(cat => tasks.filter(t => t.category === cat).length);

    const pieCtx = document.getElementById('pieChart').getContext('2d');
    const pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: categories,
            datasets: [{
                label: 'Tasks per Category',
                data: categoryCounts,
                backgroundColor: categories.map((_, i) => i % 2 === 0 ? '#a09d80ff' : '#525734ff')
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'right' }
            }
        }
    });
</script>

</body>
</html>
