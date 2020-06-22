<?php

include('connection.php');
$Name=$_POST["name"];
// $Address=$_POST["address"];
$Phone=$_POST["phone"];
//$License=$_POST["license"];
//$Engine=$_POST["engine"];
$Appointment=$_POST["date"];
//$Mechanic =$_POST["mechanic"];
//echo $Mechanic;
//$sql= "INSERT INTO users ('Name','Address','Phone','Car License Number','Car Engine Number','Appointment Date',' Mechanic') VALUES ('$Name','$Address','$Phone','$License','$Engine','$Appointment','$Mechanic')";
//mysqli_query($db, $sql);
if (isset($_POST['submit'])) {
    echo $Name;
    echo $Phone;
    echo $Appointment;
// echo"Submit";
//$query = "INSERT INTO users (Name,Address,Phone,Car_License_Number,Car_Engine_Number,Appointment_Date,Mechanic) VALUES('$Name','$Address','$Phone','$License','$Engine','$Appointment','$Mechanic')";
//$query = "UPDATE users SET (Name='A',Phone='09',Car_License_Number=1,Car_Engine_Number=2,Appointment_Date=03/10/2020,Mechanic='Mogbul') where (Name='Sam');
$query="DELETE FROM users WHERE Name='$Name'and Phone='$Phone' and Appointment_Date='$Appointment';";

mysqli_query($db, $query);
header("Location: info.php");

}

//}
//header("Location: user.php?Book Appointment=success");

?>