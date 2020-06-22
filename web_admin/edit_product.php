<?php
include("check_session.php");
//include("pet_list.php")
include("connection.php");
//$_id=$_REQUEST['user_id'];
$product_id=$_REQUEST['product_id'];
$result=mysqli_query($connection,"select product_id,image,product_name,price from products where product_id='$product_id'")or die ("query 1 incorrect.......");

list($product_id,$image,$product_name,$price)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{
   // $product_id=$_GET['product_id'];
$product_name=$_POST['product_name'];
$image=$_POST['image'];
$price=$_POST['price'];
mysqli_query($connection,"UPDATE products SET product_name ='$product_name',image ='$product_name', price =$price WHERE product_id = $product_id ;'")or die("Query 2 is incorrect..........");

header("location: pet_list.php");
mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<?php include("include/header.php"); ?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    
	<div class="col-md-10 content" align="center">  
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Edit User Details </h1></div><br>
<form action="edit_product.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="user_id" id="product_id" value="<?php echo $product_id;?>" />
<label style="font-size:18px;">Image</label>
<br>
<input class="input-lg" style="font-size:18px; width:200px" name="image" type="text"  id="image" value="<?php echo $image; ?>" autofocus><br><br>
<label style="font-size:18px;">Product Name</label>
<br>
<input class="input-lg" style="font-size:18px; width:200px" name="product_name" type="text"  id="product_name" value="<?php echo $product_name; ?>">
<br>
<label style="font-size:18px;">Price</label>
<br>
<input class="input-lg" style="font-size:18px; width:200px" name="price" type="text"  id="price" value="<?php echo $price; ?>">
<br>
<br>
 <button type="submit" class="btn btn-success" name="btn_save" id="btn_save" style="font-size:18px">Submit</button>
</form>
</div></div>
<?php include("include/js.php");?>
</body>
</html>