<?php
// Database connection
include 'dbconn.php';

// Get form data
$name = $_POST['name'] ?? '';
$contactInfo = $_POST['contact_info'] ?? '';
$purpose = $_POST['purpose'] ?? '';
$host = $_POST['host'] ?? '';

if (empty($name) || empty($contactInfo) || empty($purpose)) {
    die("Please fill out all fields.");
}

// Generate a unique QR code data
$qrData = uniqid('visitor_', true);

// Set expiration time (e.g., 24 hours from now)
$expiresAt = date('Y-m-d H:i:s', strtotime('+24 hours'));

// Insert into the database
$stmt = $pdo->prepare('INSERT INTO visitors (name, contact_info, purpose, host, qr_data, expires_at) VALUES (?, ?, ?, ?, ?, ?)');
$stmt->execute([$name, $contactInfo, $purpose, $host, $qrData, $expiresAt]);

// Redirect to success page or display QR code
header('Location: registration_success.php?qr_data=' . urlencode($qrData));
exit();
?>