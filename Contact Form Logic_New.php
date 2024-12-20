<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "your-email@example.com"; // Replace with your email
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $status = "Thank you! Your message has been sent.";
        } else {
            $status = "Sorry, there was an issue sending your message. Please try again.";
        }
    } else {
        $status = "Please fill in all fields with valid information.";
    }
}
?>
