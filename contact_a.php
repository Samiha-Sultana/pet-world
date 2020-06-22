<?php
include("connection.php");
if(isset($_POST['submit'])) {
//$success = $_POST["success"];
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
mysqli_query($connection,"INSERT INTO contact(name, email, subject, message) VALUES ('Sam','s','s','d');") or die ("query incorrect");
//echo $name;
 header("location: contact_msg.php");
 ?>