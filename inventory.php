<!DOCTYPE html>
<!--Author: Steve Dillon-->
<!--WNM 608 OL1: MS: WEB TECHNOLOGY 1-->
<!--Assignment 14.1: Final Project: Due-->
<!--Created: 12/12/15-->

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

  <!-- Modal CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">


  <!-- jQuery library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  
  <!-- Javascript -->
  <script defer src="js/global.js"></script>
  <script type="text/javascript" src="js/products.js"></script>

  <!-- Bootstrap Modal -->

  <!--Bootstrap modal came from this tutorial on CodeLab: http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/bootstrap-modals.php-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">

    $(document).ready(function(){
      $("#myModal").modal('show');
    });

  </script>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<!--Included Header php file -->

<?php include("sp_header.php");?>

<!-- Product Details -->


<div class="description">
  <section>
    <h4>Everything Under the Sun</h4> 
    <p>Click on an item below to view more details or choose any one of the fine items for sale from the shop drop down list. As always, please feel free to contact us at the email address below and we might (never) get back to you. Happy Stocking!</p> 
  </section>

  <!-- Product Image Flexbox-->

  <div id="sidebar_2">
    <section>
      <h4>Our Top Products</h4>
      <div class="flexbox_container">
        <section id="prod_table">

          <!--/* Javascript will publish our products here */-->

        </section>
      </div>
    </section>
  </div>


<!--Included Footer php file -->

<?php include("sp_footer.php");?>

</div>
</html>