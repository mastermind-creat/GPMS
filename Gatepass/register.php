<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Gate Pass System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Registration Section -->
    <section class="registration-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 animate__animated animate__fadeIn">
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <h2 class="card-title text-center mb-4">
                                <i class="bi bi-person-plus"></i> Register
                            </h2>
                            <!-- Tabs for Permanent and Temporary Registration -->
                            <ul class="nav nav-tabs mb-4" id="registrationTabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="permanent-tab" data-bs-toggle="tab" href="#permanent">
                                        <i class="bi bi-people"></i> Permanent User
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="temporary-tab" data-bs-toggle="tab" href="#temporary">
                                        <i class="bi bi-person"></i> Temporary User
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab Content -->
                            <div class="tab-content">
                                <!-- Permanent User Registration -->
                                <div class="tab-pane fade show active" id="permanent">
                                    <form action="register_permanent.php" method="POST">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">
                                                <i class="bi bi-person-fill"></i> Full Name
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">
                                                <i class="bi bi-envelope-fill"></i> Email
                                            </label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">
                                                <i class="bi bi-phone-fill"></i> Phone
                                            </label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="role" class="form-label">
                                                <i class="bi bi-person-badge"></i> Role
                                            </label>
                                            <select class="form-select" id="role" name="role" required>
                                                <option value="student">Student</option>
                                                <option value="teacher">Teacher</option>
                                            </select>
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="bi bi-check-circle"></i> Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Temporary User Registration -->
                                <div class="tab-pane fade" id="temporary">
                                    <form action="register_temporary.php" method="POST">
                                        <div class="mb-3">
                                            <label for="visitorName" class="form-label">
                                                <i class="bi bi-person-fill"></i> Full Name
                                            </label>
                                            <input type="text" class="form-control" id="visitorName" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contactInfo" class="form-label">
                                                <i class="bi bi-telephone-fill"></i> Contact Info
                                            </label>
                                            <input type="text" class="form-control" id="contactInfo" name="contact_info" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="purpose" class="form-label">
                                                <i class="bi bi-info-circle-fill"></i> Purpose of Visit
                                            </label>
                                            <input type="text" class="form-control" id="purpose" name="purpose" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="host" class="form-label">
                                                <i class="bi bi-person-check-fill"></i> Host (Optional)
                                            </label>
                                            <input type="text" class="form-control" id="host" name="host">
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="bi bi-check-circle"></i> Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
</body>
</html>