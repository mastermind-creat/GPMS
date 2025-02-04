<?php
include 'dbconn.php';

// Get QR code data from the query parameter
$qrData = $_GET['qr_data'] ?? '';

if (empty($qrData)) {
    die("Invalid QR code data.");
}

// Check permanent users table
$stmt = $pdo->prepare('SELECT * FROM users WHERE qr_data = ?');
$stmt->execute([$qrData]);
$user = $stmt->fetch();

if ($user) {
    // Log entry for permanent user
    $action = 'entry'; // or 'exit' based on your logic
    $stmt = $pdo->prepare('INSERT INTO gate_passes (user_id, user_type, action) VALUES (?, ?, ?)');
    $stmt->execute([$user['id'], 'permanent', $action]);

    // Redirect to user dashboard or home page
    header('Location: user_dashboard.php');
    exit();
} else {
    // Check visitors table
    $stmt = $pdo->prepare('SELECT * FROM visitors WHERE qr_data = ? AND expires_at > NOW()');
    $stmt->execute([$qrData]);
    $visitor = $stmt->fetch();

    if ($visitor) {
        // Log entry for visitor
        $action = 'entry'; // or 'exit' based on your logic
        $stmt = $pdo->prepare('INSERT INTO gate_passes (user_id, user_type, action) VALUES (?, ?, ?)');
        $stmt->execute([$visitor['id'], 'temporary', $action]);

        // Redirect to visitor dashboard or home page
        header('Location: visitor_dashboard.php');
        exit();
    } else {
        // Invalid QR code
        die("Invalid QR code. Please try again.");
    }
}
?>