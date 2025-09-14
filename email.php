<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email parameters
    $to = $email;
    $subject = "Thank you for contacting us";
    $headers = "From: your-email@example.com"; // Replace with your email address or a valid sender

    // Compose the email message
    $email_message = "Dear $name,\n\n";
    $email_message .= "Thank you for contacting us. We received your message:\n\n";
    $email_message .= "$message\n\n";
    $email_message .= "Best regards,\nYour Company";

    // Use the mail() function to send the email
    $success = mail($to, $subject, $email_message, $headers);

    // Check if the email was sent successfully
    if ($success) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Redirect users who try to access this script directly
    header("Location: index.html");
    exit();
}
?>