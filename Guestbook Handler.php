<?php
// File to store guestbook entries
$guestbookFile = 'guestbook.txt';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($message)) {
        $entry = "Name: $name\nMessage: $message\n---\n";
        file_put_contents($guestbookFile, $entry, FILE_APPEND);
    } else {
        echo "<p style='color:red;'>Both fields are required!</p>";
    }
}

// Read and display guestbook entries
$entries = file_exists($guestbookFile) ? file_get_contents($guestbookFile) : "No entries yet.";
?>
