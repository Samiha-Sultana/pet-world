<?php 
include('header.php');
include('register.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, th, td {
    border: 1px solid black;
    color: black;
    }
   
.h{
    height: 100%;
    margin: 0;
    padding-top: 50px;
    padding-bottom :50px;
}

</style>
</head>
<body>
<h3>** You cannot book a doctor if he already has 4 appointments in that day. Please choose another doctor or another day if that scenario appears.**
<h3>** You cannot book multiple mechanics under same name plus phone number on the very same day**</h3>
<h3>** To update any information or cancel any appointment, please call or email us by using contact details**</h3>
<br>

    <div class= "h">
    <h2>Appointment Booking Form : </h2>
    <form action="register.php" method="POST">
    <input type="text" name="name" placeholder="Write your name">
    <br>
    <input type="text" name="address" placeholder="Write your address" autocomplete="off">
    <br>
    <input type="number" name="phone" placeholder="Write your phone number" autocomplete="off">
    <br>
    <input type="number" name="license" placeholder="Write your Car license number"autocomplete="off">
    <br>
    <input type="number" name="engine" placeholder="Write your Engine Number"autocomplete="off">
    <br>
    <input id="date" type="date" name="date" name="appointment">
    <br>
    Choose Doctor:
    <br>
    <select name="mechanic">
        <option>Mogbul</option>
        <option>Abul</option>
        <option>Zareef</option>
        <option>Sadman</option>
        <option>Hablu</option>
    </select>
<br>
<button type="submit" name="submit">Book Appointment</button>
 
<h3>Info : </h3>
    <?php

 $sql="SELECT * FROM `users` order by Mechanic;";
 $result=mysqli_query($db,$sql);
 $resultCheck=mysqli_num_rows($result);
 if($resultCheck > 0){
   echo "<table><tr><th>Name</th><th>Appointment Date</th><th>Doctor Name</th></tr>";
     while($row=mysqli_fetch_assoc($result)){
         echo "<tr><td>".$row['Name']."</td><td>".$row['Appointment_Date']."</td><td>".$row['Mechanic']."</td><tr>";
     }
 }
 ?>
</div>

</body>
</html>
