<?php
session_start();

// Hardcoded credentials for demonstration
$users = [
    "admin" => "password123",
    "user" => "userpass456",
];

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $message = "Invalid username or password!";
    }
}
?>
