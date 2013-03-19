<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
 
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>BeYouBeHealthy</title>

	<!-- Included CSS Files -->
  <link rel="stylesheet" href="stylesheets/FontAwesome/css/font-awesome.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="stylesheets/offcanvas.css">

  <script src="javascripts/foundation/modernizr.foundation.js"></script>
  

</head>

<body id="page" class="off-canvas hide-extras">
	<div class="container">
<!-- MUST STAY TOGETHER -->
		<header id="header" class="twelve columns">
		  <div class="four columns phone-two">
		    <h1 id="site-title"><a href="index.php">BeYouBeHealthy</a></h1>
		  </div>
		  <div class="eight columns phone-two">
		    <nav id="menu" role="navigation" class="hide-for-small">
    			<ul id="mainNav" class="nav-bar">
    				<li><a href="1.php">Contact</a></li>
    				<li><a href="2.php">For Policy & Health Care Professionals </a></li>
    				<li><a href="3.pho">For Teachers</a></li>
    				<li><a href="4.php">For Parents</a></li>
    			</ul>
    		</nav>
    		
  			<p class="show-for-small">
  			  <a class='sidebar-button button' id="sidebarButton" href="#sidebar" >Menu</a>
  			</p>
  			
		  </div>
		</header>
		
<!-- VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV
		NEED TO HIDE FOR IE 
VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV-->		
		<section id="sidebar" role="complementary">
			<nav id="sideMenu" role="navigation">
    			<ul id="sideMainNav" class="nav-bar">
    				<li><a href="">For Parents</a></li>
    				<li><a href="">For Teachers</a></li>
    				<li><a href="">Policy & Health Care Professionals</a></li>
    				<li><a href="">Contact</a></li>
    			</ul>
    		</nav>
  		</section>
<!-- END MUST STAY TOGETHER -->




<div class="twelve columns">
<!-- Orbit Container -->
	<div class="six columns">
		<div id="featured">
		  	<!--<div>
			<img src="images/test.jpg">
			</div>-->
  			<div>
			<img src="images/test1.jpg">
			</div>
  			<div>
			<img src="images/test3.jpg">
			</div>
		</div>
	</div>	
	<div class="three columns">
		<p>Love the Glove</h3>
	</div>
	<div class="three columns">
		<p>Sex Loop</h3>
	</div>		
</div>
<!-- END Orbit LAYOUT -->

<div class="twelve columns">		
	<section role="main">
		<a href="relationships.php"><div class="two columns panel rounded" style="border-bottom: 5px solid rgba(255,48,48,1.0)">
		<i class="icon-heart" style="font-size: 100px; color: #dcdcdc"></i>
		<h4>Love, Sex & Relationships</h4>
		</div></a>

		<a href=""><div class="two columns panel rounded" style="border-bottom: 5px solid #7CD7FF">
		<i class="icon-user-md" style="font-size: 100px; color: #dcdcdc"></i>
			<h4>Health <br>Matters</h4>
		</div></a>

		<a href=""><div class="two columns panel rounded" style="border-bottom: 5px solid #FFD91C">
		<i class="icon-plus" style="font-size: 100px; color: #dcdcdc"></i>
			<h4>Teen Health Care Rights</h4>
		</div></a>

		<a href=""><div class="two columns panel rounded" style="border-bottom: 5px solid #2C944B">
		<i class="icon-map-marker" style="font-size: 100px; color: #dcdcdc"></i>
			<h4>Clinic <br>Finder</h4>
		</div></a>
		<a href=""><div class="two columns panel rounded" style="border-bottom: 5px solid #6666CC">
		<i class="icon-group" style="font-size: 100px; color: #dcdcdc"></i>
			<h4>Health Data & Research</h4>
		</div></a>
	</section> 
</div>
   		
<!--
      		<div class="four columns">
      		  <h4>Sidebar</h4>
      		  <ul class="disc">
      		    <li><a href="#">Link to a Category</a></li>
      		    <li><a href="#">Link to a Category</a></li>
      		    <li><a href="#">Link to a Category</a></li>
      		    <li><a href="#">Link to a Category</a></li>
      		    <li><a href="http://en.wikipedia.org/wiki/The_Legend_of_Zelda:_A_Link_to_the_Past">Link to the Past</a></li>
      		  </ul>
      		</div>
-->      		
</div>


	<!-- Included JS Files -->
	  <script src="js/jquery.stickyFooter.js"></script>
	  <script src="javascripts/foundation/jquery.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.reveal.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.orbit.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.forms.js"></script>
	  <script src="javascripts/foundation/jquery.placeholder.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.tooltips.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.alerts.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.buttons.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.accordion.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.navigation.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	  <script src="javascripts/foundation/jquery.foundation.tabs.js"></script>
	  <script src="javascripts/foundation/jquery.offcanvas.js"></script>
	  <script src="javascripts/foundation/app.js"></script>

	<script>
		$('#featured').orbit({
		animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
		animationSpeed: 800,                // how fast animtions are
		timer: false,                        // true or false to have the timer
		resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
		advanceSpeed: 4000,                 // if timer is enabled, time between transitions
		pauseOnHover: true,                // if you hover pauses the slider
		startClockOnMouseOut: false,        // if clock should start on MouseOut
		startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
		directionalNav: true,               // manual advancing directional navs
		captions: false,                     // do you want captions?
		captionAnimation: 'fade',           // fade, slideOpen, none
		captionAnimationSpeed: 800,         // if so how quickly should they animate in
		bullets: false,                     // true or false to activate the bullet navigation
		bulletThumbs: false,                // thumbnails for the bullets
		bulletThumbLocation: '',            // location from this file where thumbs will be
		afterSlideChange: function(){},     // empty function
		fluid: true                         // or set a aspect ratio for content slides (ex: '4x3')
		});
	</script>

<script type='text/javascript'>
   $(window).load(function() {
       $('#featuredContent').orbit({ fluid: '16x6' });
   });
</script>

</body>