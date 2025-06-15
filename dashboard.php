<?php
require_once __DIR__ . '/db_connection.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🌊 PUP AquaMonitor</h1>
            <p>Polytechnic University of the Philippines - IoT Water Level Monitoring System</p>
        </div>
        <div class="nav-tabs">
            <button class="tab-btn active" onclick="switchTab('monitoring')">Water Monitoring</button>
            <button class="tab-btn" onclick="switchTab('statistics')">Statistics</button>
            <button class="tab-btn" onclick="switchTab('settings')">Settings</button>
            <a href="#" class="tab-btn" role="button">
                Logout
            </a>
        </div>
        <?php
            require __DIR__ . '/../PuPAquaMonitor/water_level_monitor.php';
            require __DIR__ . '/../PuPAquaMonitor/statistic.php';
            require __DIR__ . '/../PupAquamonitor/setting.php';
        ?>  
    </div>
</body>
<script src="script.js"></script>
<script src="path/to/chartjs/dist/chart.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>