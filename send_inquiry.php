<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Set the recipient email address
    $to = "thegrandkalimpong@gmail.com"; // Replace with your email address

    // Set the email subject
    $subject = "New Inquiry from $name";

    // Create the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    // Set headers
    $headers = "From: $email\r\n"; // Sender's email

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your inquiry, we will get back to you soon!";
    } else {
        echo "There was an error sending your inquiry. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>