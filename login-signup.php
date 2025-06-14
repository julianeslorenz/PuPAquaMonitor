<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🌊 PUP AquaMonitor</h1>
            <p>Polytechnic University of the Philippines - IoT Water Level Monitoring System</p>
        </div>
        <div class="login-signup-container">
            <div class="login-signup-content active" id="login">
            <div class="card-login-signup">
                <label>Email</label>
                <input type="text" name="email" class="form-control mb-2" placeholder="Enter your email...">
                <label>Password</label>
                <input type="password" name="password" class="form-control mb-2" placeholder="Enter your password...">
                <button class="login-signup-button form-control mt-3">Login</button><br>
                <a href="#" class="login-signup-btn text-center" onclick="loginSignupTabs('signup', event)">Don't have an account? Click here.</a>
            </div>
            </div>

            <!-- Signup -->
            <div class="login-signup-content" id="signup">
            <div class="card-login-signup">
                <label>Email</label>
                <input type="text" name="new_email" class="form-control mb-2" placeholder="Enter your email. e.g. juandealcruz@gmail.com...">
                <label>Password</label>
                <input type="password" name="new_password" class="form-control mb-2" placeholder="Enter your password...">
                <label>Confirm Password</label>
                <input type="password" name="new_password" class="form-control mb-2" placeholder="Confirm your password...">
                <button class="login-signup-button form-control mt-3">Sign Up</button><br>
                <a href="#" class="login-signup-btn" onclick="loginSignupTabs('login', event)">Already have an account? Click here.</a>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>
