<!DOCTYPE html>
<!--Author: Steve Dillon-->
<!--WNM 608 OL1: MS: WEB TECHNOLOGY 1-->
<!--Assignment 5.2: Midterm Project: Refine and Implement Site Design-->
<!--Created: 10/0/15-->
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
  <link rel="stylesheet" media="(max-width: 1680px)" href="css/1680.css" />
  <link rel="stylesheet" media="(max-width: 1280px)" href="css/1280.css" />
  <link rel="stylesheet" media="(max-width: 1024px)" href="css/1024.css" />
  <link rel="stylesheet" media="(max-width: 960px)" href="css/960.css" />
  <link rel="stylesheet" media="(max-width: 820px)" href="css/820nav.css" />
  <link rel="stylesheet" media="(max-width: 524px)" href="css/524.css" />


  <!-- jQuery library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

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
      <h2>Custom Photo Print</h2> 
    </section>
  </div>

  <!-- Product Image -->
  <aside id="sidebar">
    <section>
      <div class="clear">
        <img src="images/Custom_Photo_Print.jpg" alt="Laguna Sofa" >
      </div>
    </section>

    <div class="product_details">
      <h4>Dimensions:</h4>
      <h5>8 x 10</h5>
      <h5>10 x 12</h5> 
      <h5>18 x 24</h5> 
    </div>
  </aside>

<div id="caption">
  <section>
    <h2>Description</h2>
    <p>MetalPrints represent a new art medium for preserving photos by infusing dyes directly into specially coated aluminum sheets. Your images will take on a magical luminescence. Select your photo and print size below.
    </p><br>
    <h2>$150.00</h2>

    <a href="cart.php" class="button" >ADD TO CART</a><br>
    <img src="images/cards.png" alt="Cards" >
    </section><br>
</div>

<section>
  <div class="notes">
    <h6>All prints professionaly processed by <a href="https://www.bayphoto.com/" target="blank">Bay Photo.</a><br><br>
      Please contact us at the email below with questions.</h6>
    </div>
  </section>


  <!--Included Footer php file -->

  <?php include("sp_footer.php");?>
  
</body>
</html>