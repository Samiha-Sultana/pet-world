<?php


// initializing variables
$firstName = "";
$lastName = "";
$email    = "";
$sID = "";
$sLot    = "";
$errors = array(); 



// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'student');

include('connection.php');
 $user_check_slot_Saturday = "SELECT * FROM users WHERE slot='Saturday'";
  $user_check_slot_Sunday = "SELECT * FROM users WHERE slot='Sunday'";
  $user_check_slot_Monday = "SELECT * FROM users WHERE slot='Monday'";
  $saturday_check = mysqli_query($db,$user_check_slot_Saturday);
  $sunday_check = mysqli_query($db,$user_check_slot_Sunday);
  $monday_check = mysqli_query($db,$user_check_slot_Monday);
   $sat =  mysqli_num_rows($saturday_check);
  $sun =  mysqli_num_rows($sunday_check);
  $mon =  mysqli_num_rows($monday_check);
  
 


 /*$user_check_slot_Saturday = "SELECT * FROM users WHERE slot='Saturday'";
$saturday_check = mysqli_query($db,$user_check_slot_Saturday);
 $sat =  mysqli_num_rows($saturday_check);
  echo $sat; */

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstName = mysqli_real_escape_string($db, $_POST['first_name']);
  $lastName = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $sID = mysqli_real_escape_string($db, $_POST['sid']);
  $sLot = mysqli_real_escape_string($db, $_POST['slot']);
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstName)) { array_push($errors, "First name is required"); }
  if (empty($lastName)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($sID)) { array_push($errors, "SID is required"); }
  if (empty($sLot)) { array_push($errors, "Slot is required"); }
  
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE sid='$sID' OR email='$email' LIMIT 1";
 


  $result = mysqli_query($db, $user_check_query);
 

  $user = mysqli_fetch_assoc($result);
 

  $option= " You can try ";

  if($sat<3){
    $option =  $option."Saturday ";
  }
  if($sun<3){
    $option =  $option."Sunday ";
  }
  if($mon<3){
    $option =  $option."Monday ";
  }
  

 
  
  if ($user) { // if user exists
    if ($user['sid'] == $sID) {
      array_push($errors, "Student ID already exists");
    }

    if ($user['email'] == $email) {
      array_push($errors, "Email already exists");
    }
  }

  if($sLot=='Saturday'){
   if($sat>=3){
     array_push($errors, "Saturday slot filled up already ".$option);
   }
  }

  else if($sLot=='Sunday'){
   if($sun>=3){
     array_push($errors, "Sunday slot filled up already ".$option);
   }
 }
  else if($sLot=='Monday'){
   if($mon>=3){
     array_push($errors, "Monday slot filled up already ".$option );
   }
  }
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO users (first_name,last_name,sid,email,slot) 
  			  VALUES('$firstName', '$lastName','$sID', '$email','$sLot')";
  	mysqli_query($db, $query);
  	
  	header('location: index.php');
  }
}

?>