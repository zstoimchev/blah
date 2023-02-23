<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "stoimchev@outlook.com";
  $subject = "Contact form submission from $fullname";
  $headers = "From: $email";
  $mail_body = "Full Name: $fullname\nEmail: $email\n\nMessage:\n$message";

  mail($to, $subject, $mail_body, $headers);
}
?>
