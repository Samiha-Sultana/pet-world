<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
include('connection.php');
     
    // $errors = array(); 

//echo $Mechanic;
//$sql= "INSERT INTO users ('Name','Address','Phone','Car License Number','Car Engine Number','Appointment Date',' Mechanic') VALUES ('$Name','$Address','$Phone','$License','$Engine','$Appointment','$Mechanic')";
//mysqli_query($db, $sql);
if (isset($_POST['submit'])) {
    $count=0;
  $Name=$_POST["name"];
  $Address=$_POST["address"];
  $Phone=$_POST["phone"];
  $License=$_POST["license"];
  $Engine=$_POST["engine"];
  $Appointment=$_POST["date"];
  $Mechanic =$_POST["mechanic"];
  $flag=0;
  //if(is_int($Phone) and is_int($License) and is_int($Engine)){
  if(empty($Name)){
     // echo 'Name is required!';
     $flag=1;
  }
  if(empty($Address)){
    //echo 'Name is required!';
    $flag=1;
}
if(empty($Phone)){
    //echo 'Number is required!';
    $flag=1;
    //echo '<h2>Feild Required</h2>'
}
if(empty($License)){
    //echo 'License number is required!';
    $flag=1;
}
if(empty($Engine)){
   // echo 'Engine number is required!';
    $flag=1;
}
if(empty($Appointment)){
   // echo 'Appointment number is required!';
    $flag=1;
}

$user_check_Mogbul = "SELECT * FROM users WHERE Mechanic='Mogbul'and Appointment_Date='$Appointment'";
$mog_check = mysqli_query($db,$user_check_Mogbul);
$mog =  mysqli_num_rows($mog_check);

$user_check_Abul = "SELECT * FROM users WHERE Mechanic='Abul'and Appointment_Date='$Appointment'";
$abul_check = mysqli_query($db,$user_check_Abul);
$abul =  mysqli_num_rows($abul_check);

$user_check_Zareef = "SELECT * FROM users WHERE Mechanic='Zareef'and Appointment_Date='$Appointment'";
$zareef_check = mysqli_query($db,$user_check_Zareef);
$zareef =  mysqli_num_rows($zareef_check);

$user_check_Sadman = "SELECT * FROM users WHERE Mechanic='Sadman'and Appointment_Date='$Appointment'";
$sadman_check = mysqli_query($db,$user_check_Sadman);
$sadman =  mysqli_num_rows($sadman_check);

$user_check_Hablu = "SELECT * FROM users WHERE Mechanic='Hablu'and Appointment_Date='$Appointment'";
$hablu_check = mysqli_query($db,$user_check_Hablu);
$hablu =  mysqli_num_rows($hablu_check);



  $r="SELECT  * from users where Name='$Name' and Phone= '$Phone' and Appointment_Date='$Appointment';";
  $r2= mysqli_query($db,$r);
  //$sq2 = mysqli_query($db,$sq);
  $f = mysqli_num_rows($r2);

 // $db = mysqli_connect("localhost", "root", "", "car");

 //echo '$user';
 // $user = mysqli_fetch_assoc($result);

//if($final > 0){
    //echo 'User already exists';
    //header("Location: user.php?Book Appointment= same name exist not success");  
//}
//else{
  //  header("Location: index.php");
    //echo $user;
//}
 
    //echo"Submit";
   switch($Mechanic){
        case 'Mogbul':
            //echo'KI';
            global $count;
            global $mog;
            $count=$mog;
        break;
              //$globals['count']=$globals['mog'];
           echo $count;
            case 'Abul':
                global $count;
            global $abul;
            $count=$abul;
            break;
                //$globals['count']=$abul;
                //$count=$abul;
                case 'Zareef':
                    global $count;
            global $zareef;
            $count=$zareef;
                break;
                   // $globals['count']=$zareef;
                   // $count=$zareef;
                    case 'Sadman':
                        global $count;
                  global $sadman;
            $count=$sadman;
            echo $count;
                    break;
                        //$globals['count']=$sadman;
                       // $count=$sadman;
                        case 'Hablu':
                            global $count;
                  global $hablu;
            $count=$hablu;
                            //$globals['count']=$hablu;
                            //$count=$hablu;
            
    }
    echo $count;
   if($count<4) {
    global $f;
    echo " ".$f."";
    global $flag;
       if($f==0 and $flag==0){
        echo $count;
        $query = "INSERT INTO users (Name,Address,Phone,Car_License_Number,Car_Engine_Number,Appointment_Date,Mechanic) VALUES('$Name','$Address','$Phone','$License','$Engine','$Appointment','$Mechanic')";
        mysqli_query($db, $query);
        header("Location: user.php?Book Appointment=success");
       }
       else{
           if($flag==1){
            header("Location: user.php?Book Appointment= feilds are empty"); 
           }
           else{
            header("Location: user.php?Book Appointment= user already has appointment in that same day");  

           }
      
       }
   }
   else{
       //global $f;
       //echo " ".$f."";
   // echo $count;

    header("Location: user.php?Book Appointment= not success");
   }
}
//header("Location: user.php?Book Appointment=success");
//}
//else{

//}
?> 
</body>
</html>
