<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $to = "your_email@example.com"; // Replace with your email address
            $subject = "New Contact Form Submission from $name";
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                $feedback = "Message sent successfully!";
            } else {
                $feedback = "Failed to send the message. Please try again.";
            }
        } else {
            $feedback = "Invalid email address.";
        }
    } else {
        $feedback = "All fields are required.";
    }
}
?>
