<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'crud_db';
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add record
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql)) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Delete record
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM users WHERE id=$id");
    echo "Record deleted successfully!";
}

// Fetch all records
$result = $conn->query("SELECT * FROM users");
?>
