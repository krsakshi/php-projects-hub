<?php
session_start();

// Initialize the to-do list
if (!isset($_SESSION['todo_list'])) {
    $_SESSION['todo_list'] = [];
}

// Handle form submission to add a task
if (isset($_POST['add_task'])) {
    $task = htmlspecialchars($_POST['task']);
    if (!empty($task)) {
        $_SESSION['todo_list'][] = $task;
    }
}

// Handle task removal
if (isset($_POST['remove_task'])) {
    $index = $_POST['task_index'];
    if (isset($_SESSION['todo_list'][$index])) {
        unset($_SESSION['todo_list'][$index]);
        $_SESSION['todo_list'] = array_values($_SESSION['todo_list']); // Reindex the array
