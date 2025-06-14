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
            <a href="#" class="tab-btn" role="button">Logout</a>
        </div>

        <!-- Water Monitoring -->
        <div id="monitoring" class="tab-content active">
            <div class="dashboard-grid">
                <div class="card">
                    <h2 style="text-align: center; margin-bottom: 20px; color: #333;">Virtual Water Tank</h2>
                    <div class="tank-container">
                        <div class="tank">
                            <div class="water" id="waterLevel"></div>
                            <div class="water-level-display" id="levelDisplay">75%</div>
                            <div class="tank-labels">
                                <span>100%</span>
                                <span>75%</span>
                                <span>50%</span>
                                <span>25%</span>
                                <span>0%</span>
                            </div>
                        </div>

                        <div class="tank">
                            <div class="water" id="waterLevel"></div>
                            <div class="water-level-display" id="levelDisplay">75%</div>
                            <div class="tank-labels">
                                <span>100%</span>
                                <span>75%</span>
                                <span>50%</span>
                                <span>25%</span>
                                <span>0%</span>
                            </div>
                        </div>

                        <div class="tank">
                            <div class="water" id="waterLevel"></div>
                            <div class="water-level-display" id="levelDisplay">75%</div>
                            <div class="tank-labels">
                                <span>100%</span>
                                <span>75%</span>
                                <span>50%</span>
                                <span>25%</span>
                                <span>0%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pump-status">
                        <div class="pump-icon pump-on" id="pumpIcon">⚡</div>
                        <span id="pumpStatus">Pump: RUNNING</span>
                    </div>

                    <div class="alert" id="alertBox">
                        <strong>⚠️ Warning:</strong> <span id="alertMessage"></span>
                    </div>
                    
                </div>
            </div>
        </div>

        <div id="statistics" class="tab-content">
            <div class="dashboard-grid">
                <div class="card">

                </div>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>