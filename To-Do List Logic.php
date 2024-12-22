<?php
session_start();

if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $task = htmlspecialchars(trim($_POST['task']));
        if (!empty($task)) {
            $_SESSION['todos'][] = $task;
        }
    } elseif (isset($_POST['delete'])) {
        $index = intval($_POST['index']);
        unset($_SESSION['todos'][$index]);
        $_SESSION['todos'] = array_values($_SESSION['todos']); // Re-index array
    } elseif (isset($_POST['clear'])) {
        $_SESSION['todos'] = [];
    }
}
?>
