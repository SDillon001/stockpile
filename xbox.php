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
			<h2>MICROSOFT XBOX ONE</h2> 
		</section>
	</div>

	<!-- Product Image -->
	<aside id="sidebar">
		<section>
			<div class="clear">
				<img src="images/Microsoft_Xbox_One.jpg" alt="Xbox" >
			</div>
		</section>

		<div class="product_details">
			<h4>Dimensions:</h4>
			<p>14 x 13 x 8 inches ; 12.4 pounds</p>
			<h4>Release Date:</h4>
			<p>June 9, 2014</p>
		</div>
	</aside>

	<div id="caption">
		<section>
			<h2>Description</h2>
			<p>The Xbox One is a home video game console developed by Microsoft. Announced on May 21, 2013, it is the successor to the Xbox 360 and the third console in the Xbox family. It directly competes with Sony Computer Entertainment's PlayStation 4 and Nintendo's Wii U as part of the eighth generation of video game consoles. The Xbox One was released in North America, several European markets, Australia, and New Zealand on November 22, 2013, and in 26 other markets, including Japan, the remaining European markets, and the Middle East, in September 2014.
			</p><br>
			<h2>$349.00</h2>

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
  
</body>
</html>