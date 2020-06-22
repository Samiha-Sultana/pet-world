<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home|E-Shopper</title>
    <link href="layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="layout/css/font-awesome.min.css" rel="stylesheet">
    <link href="layout/css/prettyPhoto.css" rel="stylesheet">
    <link href="layout/css/price-range.css" rel="stylesheet">
    <link href="layout/css/animate.css" rel="stylesheet">
	<link href="layout/css/main.css" rel="stylesheet">
	<link href="layout/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head><!--/head-->

<body>
	<?php include("include/header.php");
	include("connection.php");
	 ?>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    			</div>

<?php  //success message
if(isset($_POST['success']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
//$success = $_POST["success"];
//$name=$_POST["name"];
//email=$_POST["email"];
//$subject=$_POST["subject"];
//$message=$_POST["message"];
mysqli_query($connection,"INSERT INTO contact(name, email, subject, message) VALUES ('Sam','samihasultana100@gmail.com','Hi','My pet is sick');") or die ("query incorrect");
//echo $name;
 //header("location: contact_msg.php");
//INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('Samiha','samihasultana100@gmail.com','subject','Hi there, my cat is sick.');
echo "<h1 style='color:#0C0'>Your message is send successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?>		
<!--	 		
					</div>    	
					<div align="center">
<form action="contact.php" method="post" id="login" name="login" enctype="multipart/form-data">
<div class="form-group">
<input type="text" style="font-size:18px; width:200px" class="input-lg" name="name" id="user_name" placeholder="User-Name" required autofocus>
</div>
<div class="form-group">
<input type="text" class="input-lg" name="subject" style="font-size:18px; width:200px" id="email" placeholder="Password" required>
 </div>
 <div class="form-group">
<input type="text" style="font-size:18px; width:200px" class="input-lg" name="subject" id="user_name" placeholder="User-Name" required autofocus>
</div>
<div class="form-group">
<input type="text" class="input-lg" name="message" style="font-size:18px; width:200px" id="email" placeholder="Password" required>
 </div>
 <div class="form-group">
<button class="btn btn-large btn-lg btn-success" type="submit" name="submit" id="submit">Log in</button>

</div>

</form>
	    		</div>


				-->

				</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<!--<h2 class="title text-center"></h2>-->
<div class="status alert alert-success" style="display: none"></div>
				    	<!--<form action="contact.php" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				        <button style="width:240px; height:50px" type="button" class="btn btn-success btn-primary pull-right" name="success" onClick="location.href='contact_msg.php?success=1success_msg.php?success=1'"> Submit </button>         
				            </div>
				        </form>
						-->
											
<img src="images/call.jpg">
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center"></h1>
	    				<address>
	    					<h1><p>PET-WORLD Inc.</p></h1>
							<h1><p>Dhaka Bangladesh</p></h1>
							<h1><p>Mobile: 123456</p></h1>
							<h1><p>Email: pet_world@gmail.com</p></h1>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></a></i>
<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
<?php include("include/footer.php"); ?>
    <script src="layout/js/jquery.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
	<script src="layout/js/jquery.scrollUp.min.js"></script>
	<script src="layout/js/price-range.js"></script>
    <script src="layout/js/jquery.prettyPhoto.js"></script>
    <script src="layout/js/main.js"></script>
<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;">
<i class="fa fa-angle-up">
</i></a>
</body>
</html>