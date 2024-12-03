<?php
session_start();

// Hardcoded credentials (in a real-world scenario, use a database)
$valid_username = 'admin';
$valid_password = 'password123';

// Login check
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['user'] = $username; // Store session
        header("Location: dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        $error_message = "Invalid username or password!";
    }
}
?>
