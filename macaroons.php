<!DOCTYPE html>
<!--Author: Steve Dillon-->
<!--WNM 608 OL1: MS: WEB TECHNOLOGY 1-->
<!--Assignment 7.1: Midterm Project: Finish and Submit-->
<!--sofa.html-->
<!--Created: 10/25/15-->

<html>
<head>
	<meta charset="UTF-8">
	<title>Stockpile.com</title>
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
			<h2>Macaroons</h2> 
		</section>
	</div>

	<!-- Product Image -->
	<aside id="sidebar">
		<section>
			<div class="clear">
				<img src="images/Macaroons.jpg" alt="Macaroons" >
			</div>
		</section>

		<div class="product_details">
			<h4>Flavors:</h4>
			<p>Chocolate, Vanilla, Pistachio,</p>
			<p>Lemon, Hazelnut, Strawberry, Raspberry and many more!</p>
		</div>
	</aside>

	<div id="caption">
		<section>
			<h2>Description</h2>
			<p>This tiny cake is a french pastry that is often made with ground almonds, coconut, sugar, egg whites and flavoring. To add a fun flare, food coloring is added to give each tiny cake a burst of personality! The cutest little cakes you will ever want to eat! Did we mention the amazing flavor? Yummmm!
			</p><br>
			<h2>$2.00 ea.</h2>

			<a href="#" class="button" >ADD TO CART</a><br>
			<img src="images/cards.png" alt="Cards" ><br>
		</section>
	</div>

	<section>
		<div class="notes">
			<h6>Please contact us at the email below with questions.</h6>
		</div>
	</section>


  <!--Included Footer php file -->

  <?php include("sp_footer.php");?>
  
</div>
</body>
</html>