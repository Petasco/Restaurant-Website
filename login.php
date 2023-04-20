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
$txtusername = $_POST["username"];
$txtpassword = $_POST["password"];

$sql = "SELCT * FROM User WHERE Username = '$txtusername' and Password = '$txtpassword'";
if ("$txtusername == Username & $txtpassword == Password"){
    header("Location: ./marketplace.html");
}
else {
    echo "Incorrect Details";
}


?>