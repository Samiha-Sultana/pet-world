
<?php
  include('connection.php');
  $Name=$_POST["name"];

  $Phone=$_POST["phone"];

  $Appointment=$_POST["date"];
  $Mechanic =$_POST["mechanic"];

if (isset($_POST['submit'])) {
 
$query="UPDATE users SET Mechanic='$Mechanic',Appointment_Date='$Appointment' WHERE Name='$Name' and Phone='$Phone';";
mysqli_query($db, $query);
header("Location: info.php");

}

//}
//header("Location: user.php?Book Appointment=success");

?>

