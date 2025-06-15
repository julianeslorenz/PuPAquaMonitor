
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

