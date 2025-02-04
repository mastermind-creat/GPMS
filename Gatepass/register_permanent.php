<?php
// Database connection
include 'dbconn.php';
// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$role = $_POST['role'] ?? '';

if (empty($name) || empty($email) || empty($phone) || empty($role)) {
    die("Please fill out all fields.");
}

// Generate a unique QR code data
$qrData = uniqid('user_', true);

// Insert into the database
$stmt = $pdo->prepare('INSERT INTO users (name, email, phone, role, qr_data) VALUES (?, ?, ?, ?, ?)');
$stmt->execute([$name, $email, $phone, $role, $qrData]);

// Redirect to success page or display QR code
header('Location: registration_success.php?qr_data=' . urlencode($qrData));
exit();
?>