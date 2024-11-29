Login: Validate user credentials.
Session Management: Tracks logged-in user.
Logout: Ends the session.

<?php
session_start();

// Login functionality
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example credentials
    $validUsername = "admin";
    $validPassword = "password123";

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>

//HTML Code (Login Form)
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>

//PHP Code (Dashboard with Session Validation)
<?php
session_start();

// Restrict access if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
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
    <a href="?logout=true">Logout</a>
</body>
</html>
