<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$foodname = $_POST['foodname'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];

// Sanitize the form data to prevent malicious attacks
$name = htmlspecialchars($name);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$number = htmlspecialchars($number);
$foodname = htmlspecialchars($foodname);
$quantity = htmlspecialchars($quantity);
$address = htmlspecialchars($address);

// Send the email
$to = "peterdiyouh@gmail.com";
$subject = "New Form Submission";
$body = "Name: $name\nEmail: $email\nPhone: $number\nFood: $foodname\nQuantity: $quantity\nAddress:\n$address";
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
  echo "Order Submitted Successfully!";
} else {
  echo "Sorry, there was a problem sending your address.";
}
?>
