<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "nathanael.m@outlook.com, nathmeyer97@gmail.com";
    $subject = "Form Submission from your website";
    
    $message = "Name: " . $_POST["vorname"] . " " . $_POST["nachname"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    
    // Additional form fields can be added to the message
    
    // Set the headers
    $headers = "From: " . $_POST["email"] . "\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    // Redirect back to the form or to a thank you page
    header("Location: anmelden.html");
    exit();
}
?>
