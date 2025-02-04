<?php
// Database connection
include 'dbconn.php';

// Get QR code data from the query parameter
$qrData = $_GET['qr_data'] ?? '';

if (empty($qrData)) {
    die("Invalid QR code data.");
}

// Fetch user details
$stmt = $pdo->prepare('SELECT * FROM users WHERE qr_data = ?');
$stmt->execute([$qrData]);
$user = $stmt->fetch();

if (!$user) {
    $stmt = $pdo->prepare('SELECT * FROM visitors WHERE qr_data = ?');
    $stmt->execute([$qrData]);
    $user = $stmt->fetch();
}

if (!$user) {
    die("User not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success - Gate Pass System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-body p-5 text-center">
                <h2 class="card-title mb-4">
                    <i class="bi bi-check-circle-fill text-success"></i> Registration Successful
                </h2>
                <p class="lead">Your registration is complete. Here is your QR code:</p>
                <!-- Display QR Code -->
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=<?= urlencode($qrData) ?>" alt="QR Code" class="img-fluid mb-4">
                <p class="text-muted">Scan this QR code for access.</p>
                <a href="index.php" class="btn btn-primary">
                    <i class="bi bi-house-door"></i> Return to Home
                </a>
            </div>
        </div>
    </div>
</body>
</html>