<?php
session_start();

// Check if the session variable exists
if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0; // Initialize counter
}

// Increment the counter
$_SESSION['visit_count'] += 1;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Visit Counter</title>
</head>
<body>
    <h1>PHP Session-Based Page Visit Counter</h1>
    <p>
        You have visited this page 
        <strong><?php echo $_SESSION['visit_count']; ?></strong> 
        times during this session.
    </p>
    <a href="reset.php">Reset Counter</a>
</body>
</html>
