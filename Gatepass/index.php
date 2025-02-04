<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gate Pass Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../src/frontend/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shield-lock"></i> Gate Pass System
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 animate__animated animate__fadeInDown">
                Welcome to the Gate Pass Management System
            </h1>
            <p class="lead animate__animated animate__fadeInUp">
                Efficiently manage entries and exits with QR code technology.
            </p>
            <a href="login.php" class="btn btn-light btn-lg animate__animated animate__bounceIn">
                <i class="bi bi-qr-code-scan"></i> Get Started
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 animate__animated animate__fadeInLeft">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="bi bi-people fs-1 text-primary"></i>
                            <h3 class="card-title">For Students & Teachers</h3>
                            <p class="card-text">
                                Register once and use your QR code for daily access.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="bi bi-person-plus fs-1 text-primary"></i>
                            <h3 class="card-title">For Visitors</h3>
                            <p class="card-text">
                                Register daily and get a temporary QR code for access.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInRight">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="bi bi-bar-chart-line fs-1 text-primary"></i>
                            <h3 class="card-title">Admin Dashboard</h3>
                            <p class="card-text">
                                Manage users, view logs, and generate reports.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2023 Gate Pass System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS for Animations -->
    <script>
        // Add animations on scroll
        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('.animate__animated');
            animatedElements.forEach(element => {
                element.classList.add('animate__faster');
            });
        });
    </script>
</body>
</html>