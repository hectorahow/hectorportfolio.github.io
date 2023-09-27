<?php

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create the email headers
$headers = 'From: ' . $email . "\r\n";

// Send the email
mail('hectorahow@gmail.com', 'Contact form submission', $message, $headers);

// Redirect the user to a confirmation page
header('Location: confirmation.php');

?>
