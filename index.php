<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatepass Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="bg-dark text-white text-center py-4">
        <h1>Welcome to the Gatepass Management System</h1>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container text-center my-5">
        <section class="description">
            <h2>About the System</h2>
            <p>This system helps manage gate passes efficiently, ensuring secure and organized entry and exit for users.</p>
        </section>

        <section class="user-info my-5">
            <h2>For Students and Teachers</h2>
            <p>Log in with your QR code.</p>
            <h2>For Visitors</h2>
            <p>Register here.</p>
        </section>
        
        <section class="features my-5">
            <h2>Features</h2>
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="card flex-fill">
                        <img src="./images/Free Vector _ Neon open twenty-fours hours sign.jpeg" alt="Feature 1" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Easy Registration</h3>
                            <p class="card-text">Quick and simple registration process for users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card flex-fill">
                        <img src="./images/Protect Your Devices, Protect Your Data!.jpeg" alt="Feature 2" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Secure Login</h3>
                            <p class="card-text">Robust security measures to protect user data.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card flex-fill">
                        <img src="./images/Search Projects __ Photos, videos, logos, illustrations and branding.jpeg" alt="Feature 3" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Admin Dashboard</h3>
                            <p class="card-text">Comprehensive dashboard for managing gate passes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials my-5">
            <h2>What Our Users Say</h2>
            <blockquote class="blockquote">
                <p class="mb-0">"This system has made managing gate passes so much easier!"</p>
                <footer class="blockquote-footer">John Doe, <cite title="Source Title">User</cite></footer>
            </blockquote>
        </section>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 Gatepass Management System. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
