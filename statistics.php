<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/statistics.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <h2><b>Graph Bar</b></h2>
    <canvas id="myChart"></canvas>
    <script>
        const dataBar = {
            labels: ['Notion Apps', 'Calendar Apps', 'Samsung Notes'],
            datasets: [{
                label: 'User Percentage (%)',
                data: [65, 45, 30],
                borderWidth: 2
            }]
        };

        const configBar = {
            type: 'bar',
            data: dataBar,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        new Chart(document.getElementById('myChart'), configBar);
    </script>

    <h2><b>Device Usage for Task Manager Apps</b></h2>
    <canvas id="pieChart"></canvas>
    <script>
        const dataPie = {
            labels: ['Mobile User', 'Desktop Users', 'Tablet Users'],
            datasets: [{
                label: 'Usage',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(222, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        const configPie = {
            type: 'pie',
            data: dataPie
        };

        new Chart(document.getElementById('pieChart'), configPie);
    </script>

    <h2><b>Task Manager App Usage Trend</b></h2>
    <canvas id="lineChart"></canvas>
    <script>
        const dataLine = {
            labels: ['Notion', 'Trello', 'Google Tasks'],
            datasets: [{
                label: 'App Rating (%)',
                data: [85, 72, 65],
                borderWidth: 3,
                tension: 0.3,
                borderColor: 'rgb(54, 162, 235)',
                backgroundColor: 'rgba(54, 162, 235, 0.3)',
                fill: true
            }]
        };

        const configLine = {
            type: 'line',
            data: dataLine
        };

        new Chart(document.getElementById('lineChart'), configLine);
    </script>

</body>
</html>
