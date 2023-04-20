<?php
$dbhost = 'localhost';
$dbuser ='root';
$dbpassword = '';
$dbname = 'dborder';


// connect database
$dbConn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if (!$dbConn){
  die ("connection failed: ". mysqli_connect_error());
}
echo "Database Connected Successfully \n";

// get the data from the form
$name = $_POST['Name'];
$email = $_POST['Email'];
$number = $_POST['Number'];
$foodname = $_POST['Foodname'];
$quantity = $_POST['Quantity'];
$address = $_POST['Address'];

// insert form data into the database
$sql = "INSERT INTO orders (Name,Email,Number,Food,Quantity,Address) 
VALUES ('name', 'email', 'number', 'foodname', 'quantity', 'address')";

$rs = mysqli_query($dbConn, $sql);
if ($rs){
  echo "Data recorded";
}

// Sanitize the form data to prevent malicious attacks
$name = htmlspecialchars($name);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$number = htmlspecialchars($number);
$foodname = htmlspecialchars($foodname);
$quantity = htmlspecialchars($quantity);
$address = htmlspecialchars($address);

// Send the email
$to = "peterdiyouh@gmail.com";
$subject = "New Order Submission";
$body = "Name: $name\nEmail: $email\nPhone: $number\nFood: $foodname\nQuantity: $quantity\nAddress:\n$address";
$headers = "From: $email";

if ($email != NULL){
  mail($to, $subject, $body, $headers);
}
// redirect after submission
header("./thanks.html")

/*
if (mail($to, $subject, $body, $headers)) {
  // note: you need to have SMTP setup before
  echo "Order Submitted Successfully!";
} else {
  echo "Sorry, there was a problem sending your order.";
}
*/
?>
