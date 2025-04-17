<?php
// filepath: c:\Users\SATHISH\Desktop\edurockhtml-126\edurock\franchise_mail.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $investment_budget = htmlspecialchars($_POST['investment_budget']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "askasknkl@gmail.com"; // Replace with your email address
    $subject = "Franchise Enquiry from $full_name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email body
    $body = "You have received a new franchise enquiry:\n\n";
    $body .= "Full Name: $full_name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "City: $city\n";
    $body .= "State: $state\n";
    $body .= "Investment Budget: $investment_budget\n";
    $body .= "Message: $message\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your enquiry. We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your enquiry. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>