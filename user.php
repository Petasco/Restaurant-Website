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

// get form data
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];


// insert form data into the database
$sql = "INSERT INTO User (Username,Email,Password,CPassword) 
VALUES ('username', 'email', 'password', 'cpassword')";

$rs = mysqli_query($dbConn, $sql);
if ($rs){
  echo "Sign Up Successfully";
}

$sql = "SELCT * FROM User WHERE Username = '$username' and Password = '$password'";
if ("$username == Username & $password == Password"){
    echo "Login Successfully";
}
else {
    echo "Incorrect Details";
}
?>