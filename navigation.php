<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task Manager</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #E8E3DA; 
    }

    .container {
      display: flex;
      flex: 1;
    }

  
    .sidebar {
      width: 220px;
      background-color: #C2B8A3; 
      color: #3A3A3A;
      padding: 20px;
    }

    .sidebar .logo {
      display: block;
      margin: 0 auto 20px;
      max-width: 100px;
      border-radius: 10px;
    }

    .sidebar h2 {
      margin-bottom: 30px;
      font-size: 22px;
      text-align: center;
      color: #3A3A3A;
      font-weight: 600;
    }

    .sidebar a {
      display: block;
      padding: 12px;
      margin: 10px 0;
      color: #3A3A3A;
      background: #F5F1EB;
      text-decoration: none;
      border-radius: 6px;
      font-size: 15px;
      font-weight: 600;
      transition: 0.2s;
      border: 1px solid #D7D1C7
    }

    .sidebar a:hover {
      background-color: #EAE5DD;
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
      border-left: 6px solid #C2B8A3;
      margin-bottom: 20px;
      box-shadow: 0px 3px 8px rgba(0,0,0,0.08);
    }

    header h1 {
      font-size: 24px;
      color: #3A3A3A;
      font-weight: 700;
    }

    .welcome {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      border-left: 6px solid #a09d80ff;
      box-shadow: 0px 3px 8px rgba(0,0,0,0.05)
    }

    .stats {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }

    .card {
      flex: 1;
      min-width: 150px;
      background-color: #F2ECE5;
      color: #3A3A3A;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      font-weight: 600;
      box-shadow: 0px 3px 10px rgba(0,0,0,0.12);
      transition: 0.3s;
      border: 1px solid #E0D8CE;
    }

    .card:hover {
      transform: translateY(-4px);
    }

    .card h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }


    .upcoming-card {
      background: #ffffff;
      border-left: 6px solid #C2B8A3;
      border-radius: 8px;
      padding: 20px;
      margin-top: 20px;
      box-shadow: 0px 3px 8px rgba(0,0,0,0.08);
    }

    .upcoming-card .card-header {
      font-weight: bold;
      font-size: 18px;
      color: #3A3A3A;
      margin-bottom: 10px;
    }

    .list-group-item {
      border: 1px solid #C2B8A3;
      background: #F8F5F1;
      color: #3A3A3A;
    }

    footer {
      background-color: #525734ff;
      color: #3A3A3A;
      text-align: center;
      padding: 15px;
      font-size: 14px;
      font-weight: 600;
    }
  </style>
</head>

<body>

<div class="container">

  <div class="sidebar">
    <img src="4.jpg" alt="TaskManager Logo" class="logo">

    <h2>Task Manager</h2>
    <a href="mytask.php">Add Task</a>
    <a href="viewprofile.php">Profile</a>
    <a href="products.php">Products</a>
    <a href="articles.php">Article</a>
    <a href="statistics.php">Statistics</a>
  </div>

  
  <div class="main">

    <header>
      <h1>Welcome!</h1>
    </header>

    <section class="welcome">
      <p>Track Activities and Manage Schedules All in One Place.</p>
    </section>

  
    <section class="stats">
      <div class="card">
        <h3>Total Tasks</h3>
        <p id="totalTasks">0</p>
      </div>

      <div class="card">
        <h3>Completed</h3>
        <p id="completedTasks">0</p>
      </div>

      <div class="card">
        <h3>Categories</h3>
        <p id="categories">0</p>
      </div>
    </section>

   
    <div class="upcoming-card">
      <div class="card-header">Upcoming Tasks</div>
      <ul class="list-group list-group-flush"></ul>
    </div>

  </div>
</div>

<footer>
  © 2025 Task Manager — All Rights Reserved
</footer>


<script>

let tasks = [];

function addTask(name, category, status = "pending") {
    const task = { name, category, status };
    tasks.push(task);
    renderUpcomingTasks();
    updateStats();
}

function renderUpcomingTasks() {
    const list = document.querySelector(".upcoming-card .list-group");
    list.innerHTML = ""; 

    tasks.filter(task => task.status !== "completed").forEach(task => {
        const li = document.createElement("li");
        li.className = "list-group-item";
        li.textContent = task.name;
        list.appendChild(li);
    });
}

function updateStats() {
    const total = tasks.length;
    const completed = tasks.filter(task => task.status === "completed").length;
    const categories = [...new Set(tasks.map(task => task.category))].length;

    document.getElementById("totalTasks").innerText = total;
    document.getElementById("completedTasks").innerText = completed;
    document.getElementById("categories").innerText = categories;
}


addTask("Submit assignment", "School");
addTask("Meeting 3PM", "Work");
addTask("Buy groceries", "Personal");

</script>

</body>
</html>

