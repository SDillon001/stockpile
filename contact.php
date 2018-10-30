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
  <script src="js/jquery-1.10.2.js"></script>
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

<!--Content -->

  <div class="content">
    <div id="intro">
      <h2>Reach Out to Us</h2>
      <p>Get in touch with us if you have any queries and we will get back to you as soon as possible. Please provide the contact information below:</p>
    </div>

    <div id="sidebar3">
     <section>
      <form action="form_mailer.php" method="POST" class="form2">
       <div>
        <label class="hidden" for="name">Name</label>
        <input name="name" type="text" id="name" placeholder="Name" />
      </div>
      <div>
        <label class="hidden" >Email</label>
        <input name="email" type="email" id="con_email" placeholder="Email" />
      </div>
      <div>
        <label class="hidden" >Message</label>
        <textarea name="message" id="msg" placeholder="Message"></textarea>
      </div>
      <div>
        <button type="submit" class="button">SEND EMAIL</button>
      </div>
    </form>
    </section>
  </div>


<!-- Map Column -->

<div class="sidebar4">
 <section>
  <figure class="map">
   <a href="#"><img src="images/greymap.png" alt="Grey Map" ></a>
   <figcaption>
    <p>Steve Dillon<br>
      Orange County, CA 92656<br>
      <a href="mailto:stevedillon001@gmail.com">stevedillon001@gmail.com</a>
    </p></figcaption>
  </figure>
</section>
</div>
</div>

  <!--Included Footer php file -->

  <?php include("sp_footer.php");?>


</body>
</html>