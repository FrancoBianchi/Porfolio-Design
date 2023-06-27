<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // do something with the form data
  // for example, send an email
  mail("youremail@example.com", "New contact form submission", "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message);
}

?>