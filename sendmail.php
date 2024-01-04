<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = array("nathanael.m@outlook.com", "nathmeyer97@gmail.com");  // Replace with the recipient's email addresses
    $subject = "An-/Abmeldung Hochzeit";
    $message = "Vorname: " . $_POST['vorname'] . "\n";
    $message .= "Nachname: " . $_POST['nachname'] . "\n";
    $message .= "E-Mail: " . $_POST['email'];

    // Additional headers if needed
    $headers = "From: " . $_POST['email'];

    // Mail configuration
    ini_set("SMTP", "algol.ssl.hosttech.eu");
    ini_set("smtp_port", "587");
    ini_set("sendmail_from", "info@meystermann.ch");

    // Send email
    mail(implode(", ", $to), $subject, $message, $headers);
}
?>