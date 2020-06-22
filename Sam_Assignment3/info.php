<?php
include('header2.php');
    include('connection.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>table, th, td {
    border: 1px solid black;
    color: black;
}</style>
</head>
<body>
  
  <?php
 
  $sql="SELECT * FROM `users` order by Mechanic;";
  $result=mysqli_query($db,$sql);
  $resultCheck=mysqli_num_rows($result);
  if($resultCheck > 0){
    echo "<table><tr><th>Client Name</th><th>Phone</th><th>Pet Registration Number</th><th>Appointment Date</th><th>Doctor Name</th></tr>";
      while($row=mysqli_fetch_assoc($result)){
          echo "<tr><td>". $row['Name']."</td><td>" .$row['Phone']."</td><td>".$row['Car_License_number']."</td><td>".$row['Appointment_Date']."</td><td>".$row['Mechanic']."</td><tr>";
      }
  }
  ?>
  <h2>Update Information : </h2>
   <form action="update.php" method="POST">
    <input type="text" name="name" placeholder=" Client Name">
    <br>
    <input type="number" name="phone" placeholder="Client's phone number ">
    <br>
    <input id="date" type="date" name="date" name="Appointment">
    <br>
    Choose Mechanic :
    <br>
    <select name="mechanic">
        <option>Mogbul</option>
        <option>Abul</option>
        <option>Zareef</option>
        <option>Sadman</option>
        <option>Hablu</option>
    </select>
    <br>
    <button type="submit" name="submit">Update Appointment Information</button>
    <br>
    </form>

    <h2>Delete a client : </h2>
   <form action="delete.php" method="POST">
    <input type="text" name="name" placeholder=" Client Name">
    <br>
    <input type="number" name="phone" placeholder="Client's phone number ">
    <br>
    <br>
    <input id="date" type="date" name="date" name="Appointment">
    <br>
    <br>
    <button type="submit" name="submit">Delete Appointment Information</button>
    <br>
    </form>


<h2>Existing Information : </h2>



</body>
</html>