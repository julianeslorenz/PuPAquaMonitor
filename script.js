let currentLevel = 75;
    let isPumpRunning = true;
    let isAutoMode = false;

    // Initialize chart data
    const chartData = [65, 70, 68, 75, 80, 78, 82, 85, 88, 90, 85, 82, 78, 75, 72, 70, 68, 65, 70, 75, 78, 80, 77, 75];


function switchTab(tabName) {
    // Hide all tabs
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.remove('active');
    });

    // Remove active class from all buttons
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });

    // Show selected tab and activate button
    document.getElementById(tabName).classList.add('active');
    event.target.classList.add('active');
}

function loginSignupTabs(tabName, event) {
    document.querySelectorAll('.login-signup-content').forEach(tab => {
    tab.classList.remove('active');
    });

    document.getElementById(tabName).classList.add('active');

    // Optional: highlight active link if needed
    if (event) event.preventDefault(); // Prevents page from jumping
}

function updateWaterLevel(level) {
    currentLevel = Math.max(0, Math.min(100, level));
    const waterElement = document.getElementById('waterLevel');
    const displayElement = document.getElementById('levelDisplay');
    
    waterElement.style.height = currentLevel + '%';
    displayElement.textContent = Math.round(currentLevel) + '%';
    
    // Update status
    updateSystemStatus();
    
    // Update slider
    document.getElementById('waterSlider').value = currentLevel;
}

function updateSystemStatus() {
    const statusElement = document.getElementById('systemStatus');
    const statusIndicator = document.querySelector('.status-indicator');
    const alertBox = document.getElementById('alertBox');
    const alertMessage = document.getElementById('alertMessage');
    
    if (currentLevel < 20) {
        statusElement.textContent = 'CRITICAL LOW';
        statusIndicator.className = 'status-indicator status-critical';
        showAlert('Critical water level detected! Immediate attention required.');
    } else if (currentLevel < 40) {
        statusElement.textContent = 'LOW LEVEL';
        statusIndicator.className = 'status-indicator status-warning';
        showAlert('Water level is running low. Consider refilling soon.');
    } else {
        statusElement.textContent = 'NORMAL';
        statusIndicator.className = 'status-indicator status-normal';
        hideAlert();
    }
}

function updateWaterLevel(level) {
    currentLevel = Math.max(0, Math.min(100, level));
    const waterElement = document.getElementById('waterLevel');
    const displayElement = document.getElementById('levelDisplay');
    
    waterElement.style.height = currentLevel + '%';
    displayElement.textContent = Math.round(currentLevel) + '%';
    
    // Update status
    updateSystemStatus();
    
    // Update slider
    document.getElementById('waterSlider').value = currentLevel;
}

function updateSystemStatus() {
    const statusElement = document.getElementById('systemStatus');
    const statusIndicator = document.querySelector('.status-indicator');
    const alertBox = document.getElementById('alertBox');
    const alertMessage = document.getElementById('alertMessage');
    
    if (currentLevel < 20) {
        statusElement.textContent = 'CRITICAL LOW';
        statusIndicator.className = 'status-indicator status-critical';
        showAlert('Critical water level detected! Immediate attention required.');
    } else if (currentLevel < 40) {
        statusElement.textContent = 'LOW LEVEL';
        statusIndicator.className = 'status-indicator status-warning';
        showAlert('Water level is running low. Consider refilling soon.');
    } else {
        statusElement.textContent = 'NORMAL';
        statusIndicator.className = 'status-indicator status-normal';
        hideAlert();
    }
}

function showAlert(message) {
    const alertBox = document.getElementById('alertBox');
    const alertMessage = document.getElementById('alertMessage');
    alertMessage.textContent = message;
    alertBox.classList.add('show');
}

function hideAlert() {
    document.getElementById('alertBox').classList.remove('show');
}

function togglePump() {
    isPumpRunning = !isPumpRunning;
    const pumpIcon = document.getElementById('pumpIcon');
    const pumpStatus = document.getElementById('pumpStatus');
    
    if (isPumpRunning) {
        pumpIcon.className = 'pump-icon pump-on';
        pumpStatus.textContent = 'Pump: RUNNING';
    } else {
        pumpIcon.className = 'pump-icon pump-off';
        pumpStatus.textContent = 'Pump: STOPPED';
    }
}

function emergencyStop() {
    isPumpRunning = false;
    isAutoMode = false;
    document.getElementById('pumpIcon').className = 'pump-icon pump-off';
    document.getElementById('pumpStatus').textContent = 'Pump: EMERGENCY STOP';
    showAlert('Emergency stop activated! System halted.');
}

function autoFill() {
    isAutoMode = true;
    isPumpRunning = true;
    document.getElementById('pumpIcon').className = 'pump-icon pump-on';
    document.getElementById('pumpStatus').textContent = 'Pump: AUTO FILL MODE';
    
    const fillInterval = setInterval(() => {
        if (currentLevel < 90 && isAutoMode) {
            updateWaterLevel(currentLevel + 2);
        } else {
            clearInterval(fillInterval);
            isAutoMode = false;
            document.getElementById('pumpStatus').textContent = 'Pump: RUNNING';
        }
    }, 200);
}

function resetSystem() {
    currentLevel = 75;
    isPumpRunning = true;
    isAutoMode = false;
    updateWaterLevel(75);
    document.getElementById('pumpIcon').className = 'pump-icon pump-on';
    document.getElementById('pumpStatus').textContent = 'Pump: RUNNING';
    hideAlert();
}

// Slider event listener
document.getElementById('waterSlider').addEventListener('input', function() {
    updateWaterLevel(parseInt(this.value));
});

// Initialize chart
function initChart() {
    const chartContainer = document.getElementById('chart');
    chartContainer.innerHTML = '';
    
    chartData.forEach((value, index) => {
        const bar = document.createElement('div');
        bar.className = 'bar';
        bar.style.height = value + '%';
        bar.title = `Hour ${index + 1}: ${value}%`;
        chartContainer.appendChild(bar);
    });
}

// Simulate real-time data updates
function simulateRealtimeData() {
    // Update sensor readings
    document.getElementById('flowRate').textContent = (2.0 + Math.random() * 1.0).toFixed(1) + ' L/min';
    document.getElementById('temperature').textContent = (23 + Math.random() * 3).toFixed(1) + '°C';
    document.getElementById('pressure').textContent = (1.0 + Math.random() * 0.5).toFixed(1) + ' bar';
    document.getElementById('phLevel').textContent = (6.8 + Math.random() * 0.8).toFixed(1);
    
    // Update statistics
    document.getElementById('avgLevel').textContent = (75 + Math.random() * 10 - 5).toFixed(0) + '%';
    document.getElementById('todayConsumption').textContent = (240 + Math.random() * 20 - 10).toFixed(0) + 'L';
    document.getElementById('uptime').textContent = (99.2 + Math.random() * 0.8 - 0.4).toFixed(1) + '%';
    document.getElementById('efficiency').textContent = (94 + Math.random() * 6 - 3).toFixed(0) + '%';
    
    // Update consumption data
    document.getElementById('weeklyConsumption').textContent = (1680 + Math.random() * 100 - 50).toFixed(0) + 'L';
    document.getElementById('monthlyConsumption').textContent = (7200 + Math.random() * 300 - 150).toFixed(0) + 'L';
    document.getElementById('quarterlyConsumption').textContent = (21600 + Math.random() * 500 - 250).toFixed(0) + 'L';
    document.getElementById('annualConsumption').textContent = (86400 + Math.random() * 1000 - 500).toFixed(0) + 'L';
    
    // Update Arduino & Email status
    document.getElementById('dataPackets').textContent = (1247 + Math.floor(Math.random() * 10)).toString();
    document.getElementById('totalEmails').textContent = (47 + Math.floor(Math.random() * 3)).toString();
    
    // Update timestamps
    const now = new Date();
    const timeAgo = Math.floor(Math.random() * 60);
    document.getElementById('lastArduinoUpdate').textContent = timeAgo < 5 ? 'Just now' : `${timeAgo} seconds ago`;
}

// Arduino connection test
function testArduinoConnection() {
    const button = event.target;
    button.textContent = 'Testing...';
    button.disabled = true;
    
    setTimeout(() => {
        button.textContent = 'Connection OK ✓';
        button.style.background = '#00d084';
        setTimeout(() => {
            button.textContent = 'Test Connection';
            button.style.background = '';
            button.disabled = false;
        }, 2000);
    }, 1500);
}

// Email notification test
function testEmailNotification() {
    const button = event.target;
    button.textContent = 'Sending...';
    button.disabled = true;
    
    setTimeout(() => {
        button.textContent = 'Email Sent ✓';
        button.style.background = '#00d084';
        document.getElementById('lastEmailSent').textContent = 'Just now';
        setTimeout(() => {
            button.textContent = 'Send Test Email';
            button.style.background = '';
            button.disabled = false;
        }, 2000);
    }, 2000);
}

// Add email recipient
function addEmailRecipient() {
    const email = prompt('Enter email address:');
    if (email && email.includes('@')) {
        const recipientDiv = document.createElement('div');
        recipientDiv.style.cssText = 'display: flex; align-items: center; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px;';
        recipientDiv.innerHTML = `
            <span>${email}</span>
            <span style="color: #00d084;">✓ Active</span>
        `;
        document.getElementById('emailRecipients').appendChild(recipientDiv);
    }
}

// Update threshold values
function updateThreshold(type, value) {
    document.getElementById(type + 'Threshold').textContent = value + '%';
}

// Auto water level fluctuation
function autoFluctuate() {
    if (!isAutoMode && isPumpRunning) {
        const change = (Math.random() - 0.5) * 0.5;
        updateWaterLevel(currentLevel + change);
    }
}

// Initialize everything
document.addEventListener('DOMContentLoaded', function() {
    updateWaterLevel(75);
    initChart();
    
    // Start real-time simulation
    setInterval(simulateRealtimeData, 3000);
    setInterval(autoFluctuate, 2000);
});