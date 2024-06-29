<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Email parameters
    $to = "info@stoneexpertindia.com"; // Replace with your email address
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from the contact form on your website.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Phone: $phone\n".
                  "Subject: $subject\n".
                  "Message:\n$message\n";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>
