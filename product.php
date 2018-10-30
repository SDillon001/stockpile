<?php

require 'connection.php';

//get the id of the product from the URL parameter
$product_id = $_GET['id'];

//execute the query to select the product
$result = mysqli_query("SELECT * FROM Products WHERE id = $product_id");

//Did the query fail?
if (!$result) die("Query has failed!");

//assign the result to the $product variable
$product = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<!--Author: Steve Dillon-->
<!--WNM 608 OL1: MS: WEB TECHNOLOGY 1-->
<!--Assignment 7.1: Midterm Project: Finish and Submit-->
<!--sofa.html-->
<!--Created: 10/25/15-->

<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $product['name'] ?> Stockpile.com</title>
	<link rel="icon" type="image/png" href="sdfavicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- CSS -->
	<link rel="stylesheet" href="css/global.css" type="text/css" >
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<!-- CSS media query -->
	<link rel="stylesheet" media="(min-width: 1680px)" href="css/1680.css" />
	<link rel="stylesheet" media="(max-width: 1280px)" href="css/1280.css" />
	<link rel="stylesheet" media="(max-width: 1024px)" href="css/1024.css" />
	<link rel="stylesheet" media="(max-width: 960px)" href="css/960.css" />
	<link rel="stylesheet" media="(max-width: 820px)" href="css/820nav.css" />
	<link rel="stylesheet" media="(max-width: 524px)" href="css/524.css" />


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 

	<!-- FlexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>

	<!-- Javascript -->
	<script defer src="js/global.js"></script>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<!--Included Header php file -->

<?php include("sp_header.php");?>

<!-- Product Details -->

	<div class="description">
		<section>
			<h2><?php echo $product['name'] ?></h2> 
		</section>
	</div>

	<!-- Product Image -->
	<aside id="sidebar">
	<div class="flexbox_container">
		<section>
			<div class="clear">
				<img src="images/<?php echo $product['imageName'] ?>" alt="Custom Photo Print">
			</div>
		</section>
	</div>
	</aside>

	<div id="caption">
		<section>
			<h2>Description</h2>
			<p><?php echo $product['description'] ?></p><br>
			<p id="price">$<?php echo $product['price'] ?></p>


			<a href="cart.php" class="button" >ADD TO CART</a><br>
			<img src="images/cards.png" alt="Cards" ><br>
		</section>
	</div>

	<div class="details">
		<section>
		<p><?php echo $product['details'] ?></p> 
		</section>	
	</div>

	<section>
		<div class="notes">
			<h6>Please contact us at the email below with questions.</h6>
		</div>
	</section>


  <!--Included Footer php file -->

  <?php include("sp_footer.php");?>
  
</body>
</html>