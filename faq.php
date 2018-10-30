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
  <link rel="stylesheet" href="css/jquery-ui.css">
  
  <!-- CSS media query -->
  <link rel="stylesheet" media="(max-width: 1680px)" href="css/1680.css" />
  <link rel="stylesheet" media="(max-width: 1280px)" href="css/1280.css" />
  <link rel="stylesheet" media="(max-width: 1024px)" href="css/1024.css" />
  <link rel="stylesheet" media="(max-width: 960px)" href="css/960.css" />
  <link rel="stylesheet" media="(max-width: 820px)" href="css/820nav.css" />
  <link rel="stylesheet" media="(max-width: 524px)" href="css/524.css" />


  <!-- jQuery library-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
  <script src="lib/jquery-1.11.3.min.js"></script>
  <script src="js/jquery-ui.js"></script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  
  <!-- Javascript -->
  <script defer src="js/global.js"></script>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <script>
    $(function() {
      $( "#accordion" ).accordion();
    });
  </script>


</head>

<!--Included Header php file -->

<?php include("sp_header.php");?>

  <!-- FAQ's jQeury UI Accordion https://jqueryui.com/accordion/-->

  <div id="sidebar_2">
    <h2>FAQ's</h2>
    <section>
      <div id="accordion">
        <p class="question">Question #1: What type of products do you sell?</p>
        <div>
          <p class="answer">
            Answer #1: Only the finest quality products from around the world. For a full list, click <a href="inventory.html"><span style="color: #2255b3">here.</span></a> 
          </p>
        </div>
        <p class="question">Question #2: Which countries do you ship to?</p>
        <div>
          <p class="answer">
            Answer #2: Currently, we only ship within the 50 United States, Hawaii, Puerto Rico and the British Virgin Islands.
          </p>
        </div>
        <p class="question">Question #3: Can I call to talk to a real person?</p>
        <div>
          <p class="answer">
            Answer #3: Of course not. This is sales.
          </p>
        </div>
        <p class="question">Question #4: What's the dog's name on the front page?</p>       
        <div>
          <p class="answer">
            Answer #4: He's Fries. Cute isn't he?
          </p>
        </div>
        <p class="question">Question #5: When was Stockpile.com launched?</p>
        <div>
          <p class="answer">
            Answer #5: October, 2015.
          </p>
        </div>
        <p class="question">Question #6: Who's buried in Grant's tomb?</p>         
        <div>
          <p class="answer">
            Answer #6: General Ulysses S. Grant. Grant's Tomb (as it is commonly called) is both the final resting place of General Ulysses S. Grant and a memorial to his life and accomplishments. His wife, Julia Dent Grant, also is entombed—not buried—there.
          </p>
        </div>
      </div>
    </section>
  </div>

  <!--Included Footer php file -->

  <?php include("sp_footer.php");?>

</body>
</html>