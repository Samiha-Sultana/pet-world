<?php
$link=$_REQUEST['success'];
include("connection.php");
if(isset($_POST['success']))
{
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
mysqli_query($connection,"INSERT INTO contact(name, email, subject, message) VALUES ('$name','$email','$subject','$message');") or die ("query incorrect");
}
?>
<html>
<head>
<script>
function myfunction()
{
	document.getElementById("success").click();
}
</script>
</head>
<body onLoad="myfunction()">
<form action="contact.php" method="post" id="myform">
	<input hidden="" type="text" name="success" value="<?php echo"$link";?>">
    <input hidden="" type="text" name="cmd" value="emptycart">
    
    <button hidden="" type="submit" id="success" data-modal="success" name="success" value="success"></button>
</form>

<h1 style="padding-left:400px; padding-top:200px;"><img src="images/loading-x.gif" /></h1>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
</body>
</html>