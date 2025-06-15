<!-- Statistics -->
<div id="statistics" class="tab-content">
    <div class="dashboard-grid">
        <div class="card-container">
            <div class="stat-value" id="avgLevel">78%</div>
            <div class="stat-label">Average Water Level</div>
        </div>
        <div class="card-container">
            <div class="stat-value" id="todayConsumption">245L</div>
            <div class="stat-label">Today's Consumption</div>
        </div>
        <div class="card-container">
            <div class="stat-value" id="uptime">99.2%</div>
            <div class="stat-label">System Uptime</div>
        </div>
        <div class="card-container">
            <div class="stat-value" id="efficiency">94%</div>
            <div class="stat-label">Pump Efficiency</div>
        </div>

        <div class="card">
            <h2 style="text-align: center; margin-bottom: 20px; color: #333;">Daily Consumption Graph</h2>
            <canvas id="dailyConsumption" width="100" height="50"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('dailyConsumption').getContext('2d');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>