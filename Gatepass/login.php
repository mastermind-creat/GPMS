<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Gate Pass System</title>
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
                        <a class="nav-link active" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="login-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 animate__animated animate__fadeIn">
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <h2 class="card-title text-center mb-4">
                                <i class="bi bi-person-circle"></i> Login
                            </h2>
                            <!-- QR Code Scanner -->
                            <div class="text-center mb-4">
                                <button class="btn btn-primary btn-lg" id="scan-qr-btn">
                                    <i class="bi bi-qr-code-scan"></i> Scan QR Code
                                </button>
                                <div id="qr-scanner" class="mt-3" style="display: none;">
                                    <video id="qr-video" width="100%" height="auto"></video>
                                    <p class="mt-2">Scan your QR code to log in.</p>
                                </div>
                            </div>
                            <p class="text-center mb-4">OR</p>
                            <!-- Manual Login Form -->
                            <form action="validate_login.php" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">
                                        <i class="bi bi-person-fill"></i> Username
                                    </label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">
                                        <i class="bi bi-lock-fill"></i> Password
                                    </label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="bi bi-box-arrow-in-right"></i> Login
                                    </button>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                <a href="register.php" class="text-decoration-none">
                                    <i class="bi bi-person-plus"></i> Register as Visitor
                                </a>
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
    <!-- jsQR Library for QR Code Scanning -->
    <script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.min.js"></script>
    <!-- Custom JS for QR Code Scanner -->
    <script>
        const scanQrBtn = document.getElementById('scan-qr-btn');
        const qrScanner = document.getElementById('qr-scanner');
        const qrVideo = document.getElementById('qr-video');

        scanQrBtn.addEventListener('click', () => {
            qrScanner.style.display = 'block';
            startQRScanner();
        });

        function startQRScanner() {
            navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } })
                .then(stream => {
                    qrVideo.srcObject = stream;
                    qrVideo.play();
                    requestAnimationFrame(scanQRCode);
                })
                .catch(err => {
                    console.error('Error accessing camera:', err);
                });
        }

        function scanQRCode() {
            if (qrVideo.readyState === qrVideo.HAVE_ENOUGH_DATA) {
                const canvas = document.createElement('canvas');
                canvas.width = qrVideo.videoWidth;
                canvas.height = qrVideo.videoHeight;
                const context = canvas.getContext('2d');
                context.drawImage(qrVideo, 0, 0, canvas.width, canvas.height);
                const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                const code = jsQR(imageData.data, imageData.width, imageData.height);

                if (code) {
                    alert('QR Code Scanned: ' + code.data);
                    // Send QR code data to the server for validation
                    window.location.href = `validate_qr.php?qr_data=${encodeURIComponent(code.data)}`;
                }
            }
            requestAnimationFrame(scanQRCode);
        }
    </script>
</body>
</html>