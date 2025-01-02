<?php
// Retrieve form data
$first_name = $_POST['username'];
$last_name = $_POST['lastname'];
$visitor_email = $_POST['email'];
$message = $_POST['Message'];

// Email configuration
$email_from = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';
$email_body = "First Name: $first_name\n".
              "Last Name: $last_name\n".
              "Email: $visitor_email\n".
              "Message: $message\n";

$to = 'samkelofattic@gmail.com';

// Headers for the email
$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n";

// Send email
if (mail($to, $email_subject, $email_body, $headers)) {
    // Redirect after successful submission
    header("Location: Contact.html?success=1");
    exit();
} else {
    // Redirect with error message
    header("Location: Contact.html?success=0");
    exit();
}
?>






