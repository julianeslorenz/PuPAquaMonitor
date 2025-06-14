<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
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
            <a href="#" class="tab-btn" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                Logout
            </a>
        </div>

        <?php
            require __DIR__ . '/../PuPAquaMonitor/water_level_monitor.php';
            require __DIR__ . '/../PuPAquaMonitor/statistic.php';
        ?>

        
    </div>
</body>
<script src="script.js"></script>
</html>