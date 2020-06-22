<?php
include('header.php');
?>

<html>
    <head>
        <style>
.h{
    height: 100%;
    margin: 0;
    padding-top: 50px;
    padding-bottom :50px;
}
.Header
  {
      color: white;
      text-align: center;
      
      width: 100%;
      height:35px;
      background-color:rgb(27, 12, 12);
      background-repeat:round;
      margin: 0px;
      padding-top: 50px;
      font-size: 15px;
    
     
                  
  }
            </style>
</head>
<body>
<div class ="h">
<form action="welcome.php" method="POST">
E-mail: <input type="text" name="email" autocomplete="off"><br>
Password: <input type="password" name="pass"autocomplete="off" ><br>
<input type="submit">
</form>
</div>

</body>
</html>