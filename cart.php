<!DOCTYPE html>
<!--Author: Steve Dillon-->
<!--WNM 608 OL1: MS: WEB TECHNOLOGY 1-->
<!--Assignment 13.2: Final Project: Add jQuery Libraries to Project and Add Interactivity-->
<!--Created: 12/6/15-->

<html>
<head>
	<meta charset="UTF-8">
	<title>Stockpile.com</title>
  <link rel="icon" type="image/png" href="sdfavicon.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!-- CSS -->
  <link rel="stylesheet" href="css/global.css" type="text/css" >
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/jquery-ui.css">
  
  <!-- CSS media query -->
  <link rel="stylesheet" media="(max-width: 1680px)" href="css/1680.css" />
  <link rel="stylesheet" media="(max-width: 1280px)" href="css/1280.css" />
  <link rel="stylesheet" media="(max-width: 1024px)" href="css/1024.css" />
  <link rel="stylesheet" media="(max-width: 960px)" href="css/960.css" />
  <link rel="stylesheet" media="(max-width: 820px)" href="css/820nav.css" />
  <link rel="stylesheet" media="(max-width: 524px)" href="css/524.css" />


  <!-- jQuery library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <!-- jQuery UI library-->

  <script src="js/jquery-ui.js"></script>

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
    <h4>Shopping Cart</h4> 
    <p>Drag your items to and from the cart below. Click the icon to view items larger.</p> 
  </section>

  <!-- jQuery Cart Draggable / Droppable -->
  <div class="ui-widget ui-helper-clearfix">
    <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">

      <!-- Product Image 1 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Custom_Photo_Print.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/crystal_cove_sm.jpg" alt="Crystal Cove - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Custom Photo Print: $150.00</h5>
      </li>

      <!-- Product Image 2 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Luxury_Sofa.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/lagunasofa_sm.jpg" alt="Luxury Sofa - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Luxury Sofa: $350.00</h5>
      </li>

      <!-- Product Image 3 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Friend_for_Life.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/fries_sm.jpg" alt="Friend for Life - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Friend for Life: $500.00</h5>
      </li>

      <!-- Product Image 4 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Personal_Business_Card.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/54SjCP2_sm.jpg" alt="Personal Card - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Personal Card: $50.00</h5>
      </li>

      <!-- Product Image 5 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Sony_Xperia_M2_Aqua.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/phonesmall_sm.png" alt="Sony Xperia M2 Aqua - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Sony Xperia M2 Aqua: $425.00</h5>
      </li>

      <!-- Product Image 6 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Macaroons.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/pinkmac_sm.png" alt="Macaroons - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Macaroons: $4.00</h5>
      </li>

      <!-- Product Image 7 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Camellia_Honey.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/product_img_sm.jpg" alt="Camellia Honey - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Camellia Honey: $8.99</h5>
      </li>

      <!-- Product Image 8 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Orginal_Art.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/triggTony_marketPlace_sm.jpg" alt="Original Artwork - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Original Artwork: $850.00</h5>
      </li>

      <!-- Product Image 9 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Tuatara_Lizard.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/Tuatara_02_sm.jpg" alt="Extoic Animals - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Extoic Animals: Prices Vary</h5>
      </li>

      <!-- Product Image 10 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Microsoft_Xbox_One.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/xbox_sm.png" alt="Xbox 360 - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Xbox 360: $299.00</h5>
      </li>

      <!-- Product Image 11 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Macbook_Laptop.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/macbook_web_sm.png" alt="Macbook Laptop - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Macbook Laptop: $1,200.00</h5>
      </li>

      <!-- Product Image 12 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Oblivion_Short_Sword.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/sword_PNG5518_sm.png" alt="Short Sword - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Short Sword: $650.00</h5>
      </li>

      <!-- Product Image 13 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Stormbreak_Day_Pack.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/main_stormbreak35_sm.jpg" alt="Stormbreak Day Pack - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Stormbreak Day Pack: $85.00</h5>
      </li>

      <!-- Product Image 14 -->

      <li class="ui-widget-content ui-corner-tr">
        <a href="images/Dream_Catcher.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>

        <img src="images/sized/dc_sm.jpg" alt="Custom Decorations - Drag Corner to Resize the Image:" >
        <h5 class="ui-widget-header">Custom Decorations: $150.00</h5>
      </li>

    </ul>
  </div>

  <!-- Droppable Cart Area -->

  <div id="cart" class="ui-widget-content ui-state-default">
      <h4 class="ui-widget-header">YOUR CART</h4>
  </div>



<!--Included Footer php file -->

<?php include("sp_footer.php");?>

</body>
</html>