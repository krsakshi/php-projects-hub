<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $messageBody = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($messageBody)) {
        $to = "your-email@example.com"; // Replace with your email address
        $headers = "From: $email";

        if (mail($to, $subject, $messageBody, $headers)) {
            $message = "Your message has been sent successfully!";
        } else {
            $message = "Failed to send your message. Please try again later.";
        }
    } else {
        $message = "All fields are required!";
    }
}
?>
