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
			<h2>13-inch MacBook Pro with Retina display</h2> 
		</section>
	</div>

	<!-- Product Image -->
	<aside id="sidebar">
		<section>
			<div class="clear">
				<img src="images/Macbook_Laptop.jpg" alt="Macbook" >
			</div>
		</section>

		<div class="product_details">
			<h4>Dimensions:</h4>
			<p>Height:	0.71 inches</p>
			<p>Width: 12.35 inches</p>
			<p>Weight:	3.48 pounds</p>
			<h4>Manfacturer:</h4>
			<p>Apple Inc.</p>
		</div>
	</aside>

	<div id="caption">
		<section>
			<h2>Description</h2>
			<p>When you pack so many pixels into a display — over 4 million on the 13‑inch model and over 5 million on the 15‑inch model — the results are positively stunning. The pixel density is so high, your eyes can’t discern individual pixels. Images take on a new level of realism. A spectacular 2560-by-1600 resolution on the 13‑inch MacBook Pro and an equally impressive 2880-by-1800 resolution on the 15‑inch MacBook Pro let you see more of your high-resolution images with pixel-for-pixel accuracy. And text is so sharp, you’ll feel like you’re reading email, web pages, and documents on a printed page.
			</p><br>
			<h2>$1,199.00</h2>

			<a href="cart.php" class="button" >ADD TO CART</a><br>
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
  
</body>
</html>