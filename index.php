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
    <link rel="stylesheet" href="./src/frontend/styles.css">
</head>
<body>
    <header class="bg-dark text-white text-center py-4">
        <h1>Welcome to the Gatepass Management System</h1>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
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
        </nav>
    </header>
    <main class="container text-center my-5">
        <section class="description">
            <h2>About the System</h2>
            <p>This system helps manage gate passes efficiently, ensuring secure and organized entry and exit for users.</p>
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
