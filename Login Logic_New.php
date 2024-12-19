<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Dummy credentials
    $valid_username = "admin";
    $valid_password = "12345";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $message = "Invalid username or password!";
    }
}
?>
