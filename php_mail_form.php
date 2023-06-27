<?php

// Replace with your email address
$to = "francobianchi093@gmail.com";

// Fetch form data
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  echo "Invalid email address.";
  exit;
}

// Compose email
$subject = "New form submission: " . $subject;
$headers = "From: $name <$email>";

// Send email
if (mail($to, $subject, $message, $headers)) {
  http_response_code(200);
  echo "Message sent successfully.";
} else {
  http_response_code(500);
  echo "Failed to send message.";
}

?>