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


PHP Code (Dashboard - Protected Page)
<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy session on logout
    header("Location: index.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
    <p>This is a protected page that requires login.</p>
    <a href="?logout=true">Logout</a>
</body>
</html>
