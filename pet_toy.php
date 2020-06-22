<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home|LETS-SHOP</title>
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
<li><a href="link_form.php?link=oriflame"><img src="images/brands/pedigree.png" style="width:200px"></a></li>
<li><a href="link_form.php?link=nishat"><img src="images/brands/farmina.png" style="width:200px"></a></li>
  <li><a href="link_form.php?link=mariab"><img src="images/brands/purekind.jpg" style="width:200px"></a></li>
<li><a href="link_form.php?link=gul ahmed"><img src="images/brands/love.png" style="width:200px"></a></li>
<li><a href="link_form.php?link=jj"><img src="images/brands/bus.jfif" style="width:200px"></a></li>
   
  
   </ul>
			</div></div><!--/brands_products-->
						
		</div></div>
			<div class="col-sm-9 padding-right">
		<div class="features_items"><!--features_items-->
<h2 class="title text-center">Pet Toy Items</h2>
	<?php 
$cosmetics=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%Toy%' order by rand(), time Desc LIMIT 0,12")or die("Query 1 is inncorrect..........");
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
		</div></div>
		</div></div>
";
}
 ?>
</div></div>
</div><!--features_items-->
                    
         <div class="recommended_items">
		<h2 class="title text-center">recommended items</h2>
        <?php include("include/recomended.php");?>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
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