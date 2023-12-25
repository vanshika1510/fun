<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted data
    $fixedDate = $_POST["fixedDate"];

    // Send an email
    $to = "vanshikagarg.1510@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "Submitted Date: " . $fixedDate;

    // Additional headers
    $headers = "From: vvanshika1_be21@thapar.edu" ; // Replace with your email or leave it blank

    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please check your server configuration.";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: home.html");
    exit();
}
?>
