<?php
session_start();

// Initialize the to-do list if not already set
if (!isset($_SESSION['todo_list'])) {
    $_SESSION['todo_list'] = [];
}

// Add a task
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    $task = htmlspecialchars($_POST['task']);
    if (!empty($task)) {
        $_SESSION['todo_list'][] = $task;
    }
}

// Remove a task
if (isset($_GET['remove'])) {
    $index = (int)$_GET['remove'];
    if (isset($_SESSION['todo_list'][$index])) {
        unset($_SESSION['todo_list'][$index]);
        $_SESSION['todo_list'] = array_values($_SESSION['todo_list']); // Re-index array
    }
}
?>
