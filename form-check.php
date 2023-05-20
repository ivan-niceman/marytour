<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $phone = trim($_POST["tel"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  // check if required fields are empty
  if (empty($name) || empty($phone) || empty($email)) {
    echo "Please fill in all required fields.";
    exit;
  }

  // send email
  $to = "info@marytour.ru";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  // if (mail($to, $subject, $body, $headers)) {
  //   echo "Thank you for your message!";
  // } else {
  //   echo "Oops! Something went wrong. Please try again later.";
  // }
}
