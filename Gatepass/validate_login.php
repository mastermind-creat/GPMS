<?php
// Database connection
include 'dbconn.php';
// Get form data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    die("Please fill out all fields.");
}

// Check permanent users table
$stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    // Log entry for permanent user
    $action = 'entry'; // or 'exit' based on your logic
    $stmt = $pdo->prepare('INSERT INTO gate_passes (user_id, user_type, action) VALUES (?, ?, ?)');
    $stmt->execute([$user['id'], 'permanent', $action]);

    // Redirect to user dashboard or home page
    header('Location: user_dashboard.php');
    exit();
} else {
    // Invalid credentials
    die("Invalid username or password. Please try again.");
}
?>