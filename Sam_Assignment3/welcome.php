<?php
include('connection.php');

$res1=$_POST["email"];
$res2=$_POST["pass"];
$res="SELECT * FROM admin WHERE email='$res1' and password='$res2'";
$resu = mysqli_query($db,$res);
//echo $resu;
$result=mysqli_num_rows($resu);

//echo $result;
if($result==1){
    $result=mysqli_num_rows($resu);
    echo 'You have logged in';
    header('location: adminpage.php');
}
else{
    echo 'Not logged in';
    print $result;
    header('location: admin.php');
}

/*
if ($result = mysqli_query($db,$res)) {

    /* determine number of rows result set */
  /*  $row_cnt = mysqli_num_rows($result);

    printf("Result set has %d rows.\n", $row_cnt);

    /* close result set */
   /* mysqli_free_result($result);
}
else{
    echo $res1;
    echo $res2;
}*/
mysqli_close($db);
?>