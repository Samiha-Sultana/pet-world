<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pet_World</title>
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
	<?php include("include/header.php"); ?>
	<section id="slider"><!--slider-->
	<div class="container">
	<div class="row">
	<div class="col-sm-12">
	<div id="slider-carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
<li data-target="#slider-carousel" data-slide-to="0" class=""></li>
<li data-target="#slider-carousel" data-slide-to="1" class=""></li>
<li data-target="#slider-carousel" data-slide-to="2" class="active"></li>
	</ol>
	    <div class="carousel-inner">
		<div class="item">
		<div class="col-sm-6">
<h1><span>PET</span>-WORLD</h1>
<h2>Plants</h2>
<p>Plants are super friendly, cute and quiet to be around and they give you oxygen too!
</p>
<a href="pet.php" class="btn btn-default get">Get it now
</a>
		</div>
		<div class="col-sm-6">
<img src="images/plant1.jpg" class="girl img-responsive" alt="">
		</div></div>

		<div class="item">
		<div class="col-sm-6">
<h1><span>PET</span>-WORLD</h1>
<h2>Fish</h2>
<p> We have cute and fun loving fishes. Check them out and take them home! </p>
<a href="pet.php" class="btn btn-default get">Get it now
</a>
		</div>
		<div class="col-sm-6">
<img src="images/fish.jpg" class="girl img-responsive" alt="">
		</div></div>
							
		<div class="item active">
		<div class="col-sm-6">
<h1><span>PET</span>-WORLD</h1>
<h2>DOGS AND CATS</h2>
<p> We have many surprises for the dogs and cat lovers! Check them out! </p>
<a href="pet.php" class="btn btn-default get">Get it now
</a>
		</div>
		<div class="col-sm-6">
<img src="images/dc.jpg" class="girl img-responsive" alt="">
		</div>
		</div>
		</div>
						
<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
<i class="fa fa-angle-left"></i></a>
<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next"><i class="fa fa-angle-right"></i>
		</a>
		</div></div>
		</div></div>
	    </section><!--/slider-->
	
	<section>
	<div class="container">
    <div class="row">
	<div class="col-sm-3">
	<div class="left-sidebar">
<h2>Category</h2>
	<div class="panel-group category-products" id="accordian"><!--category-productsr-->
	 <div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=Animal">Pet</a></h4></div></div>

    <div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordian" 
href="#sportswear">

         <span class="badge pull-right">
         <i class="fa fa-plus"></i>
         </span>Pet Items</a>
</h4>
	</div>
	<div id="sportswear" class="panel-collapse collapse">
	<div class="panel-body">
		<ul>
<li><a href="link_form.php?link=Food">Pet Food </a></li>
<li><a href="link_form.php?link=Toy">Pet Toy </a></li>
<li><a href="link_form.php?link=Cloth">Pet Cloth</a></li>

		</ul>
		
	</div></div>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h4 class="panel-title"><a href="link_form.php?link=Cosmetics">Pet Cosmetics</a></h4></div></div>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h4 class="panel-title"><a href="link_form.php?link=Medicine">Pet Medicine</a></h4></div></div>

	</div>
	
	
		</div><!--/category-products-->
		
        <div class="brands_products">
        <!--brands_products-->
<h2>Brands</h2>
	<div class="brands-name">
	<ul class="nav nav-pills nav-stacked">
<li><a href="#"><img src="images/brands/pedigree.png" style="width:200px"></a></li>
<li><a href="#"><img src="images/brands/farmina.png" style="width:200px"></a></li>
  <li><a href="#"><img src="images/brands/purekind.jpg" style="width:200px"></a></li>
<li><a href="link_form.php?link=gul ahmed"><img src="images/brands/love.png" style="width:200px"></a></li>
<li><a href="link_form.php?link=jj"><img src="images/brands/bus.jfif" style="width:200px"></a></li>
   
  <li><a href="link_form.php?link=sana safinaz"><img src="images/brands/petcare.png" style="width:200px"></a></li>
   <li><a href="link_form.php?link=sobia nazir"><img src="images/brands/fish.png" style="width:200px"></a></li>
   
  <li><a href="link_form.php?link=alkaram"><img src="images/brands/noot.png" style="width:200px"></a></li>
<li><a href="link_form.php?link=crescent"><img src="images/brands/fert.jpg" style="width:200px"></a></li>
<li><a href="link_form.php?link=asim jofa"><img src="images/brands/gbm.png" style="width:200px"></a></li>
<li><a href="link_form.php?link=khaadi khadi"><img src="images/brands/toy.jfif" style="width:200px"></a></li>
<li><a href="link_form.php?link=orient"><img src="images/brands/pet_cloth.png" style="width:200px"></a></li>
<li><a href="link_form.php?link=elan"><img src="images/brands/apparel.jfif" style="width:200px"></a></li>
<li><a href="link_form.php?link=motifz"><img src="images/brands/bow.jpg" style="width:200px"></a></li>
<li><a href=""><img src="images/brands/stylesh.png" style="width:200px"></a></li>
   </ul>
			</div></div><!--/brands_products-->
						
		</div></div>
				
		<div class="col-sm-9 padding-right">
		<div class="features_items"><!--features_items-->
<h2 class="title text-center">New Items</h2>
		<?php 
$cosmetics=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products  where product_type like '%Animal%' order by rand() ,time Desc LIMIT 0,12")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($cosmetics))
{
echo"
<div class='col-sm-3'>
		<div class='product-image-wrapper'>
		<div class='single-products'>
		<div class='productinfo text-center'>
<a href='product_details.php?id=$product_id' class='thumbnail'><img src='images/products/$image' alt='' style='width:250px; height:250px'></a>
<h2>Tk: $price <span><strike><p>Tk: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
		</div>
		<img src='images/new.jpg' class='new' alt=''></div>
		</div></div>
";
}
 ?>
        </div><!--features_items-->
					
			<div class="category-tab"><!--category-tab-->
			<div class="col-sm-12">
	<ul class="nav nav-tabs">
	<li  class="active">
    <a href="#sale" data-toggle="tab">
    HUGE SALE ITEMS</a></li>
	<li><a href="#toy" data-toggle="tab">
    The most rare item</a></li>
    </ul></div>

			<div class="tab-content">
          <div class="tab-pane fade active in" id="sale">
<?php 
$sale=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where tags like '%popular%'
order by rand() LIMIT 0,4")or die("Query 2 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($sale))
{
	
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href='product_details.php?id=$product_id' class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Tk: $price <span><strike><p>Tk: $c_price</p></strike></span></h2>
<p>$product_name </p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div>
			<img src='images/sale.png' class='sale' alt=''></div>
			</div></div>";
}
?>

             </div>


			<!--<div class="tab-content">-->
          <div class="tab-pane fade active in" id="toy">
<?php 
$toy=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where tags like '%rare%'
order by rand() LIMIT 0,4")or die("Query 2 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($toy))
{
	
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href='product_details.php?id=$product_id' class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Tk: $price <span><strike><p>Tk: $c_price</p></strike></span></h2>
<p>$product_name </p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div>
			<img src='images/rarex2.png' class='sale' alt=''></div>
			</div></div>";
}
?>
</div>
        </div>
        
        <img style="width:100%" src="images/products/shop.jpg">
        </div><!--/category-tab-->
	</div></div>				
	<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">
Recommended Items</h2>
		<?php include("include/recomended.php");?>
        </div><!--/recommended_items-->
</div>
</section><br>
	
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