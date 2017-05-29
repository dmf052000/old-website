<?php

	$title = "RepBox CRM";

	include("header.php");
	include_once("analyticstracking.php")



?>
	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/mailform.css">
<link href="https://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">




</head>

<body class="waitMe_body home-page">
	<div class="waitMe_container img" style="background:#fff">
		<div style="background:url('assets/img/logo.png')"></div>



 </div>
	<!-- <noscript><img src='http://138.197.77.81//pixel.png?app_key=769c6d0f948fb1a9331c22f550206dcbf0b3e73d&begin_session=1'/></noscript> -->

	<?php
		$header_logo = "assets/img/logo-white.png";
		$header_top = "assets/img/logo.png";
		include("menu.php");

		$message ="";
		$error = "";
		include("includes/Repbox.php");

	?>

	<section id="large-header" class="promo contact-submit section section-on-bg">

			<!--<ul class="list-inline main-btns">
				<li class="fade-in one ">
				  <a class="fancybox fitVideo fancybox.iframe btn btn-1 btn-1e col-right" href="assets/Videos/Repbox-video.mp4" title="Repbox CRM">Watch Video </a>
				</li>
				<li class="fade-in one ">
				  <a class="btn btn-2 btn-2e col-left" href="tryrepbox.php">Try for <span style="text-decoration:underline">Free</span></a>
				</li>
			</ul>-->
		</div>
		<canvas id="demo-canvas"></canvas>
	  <div class="container headerContent text-center">
	<div class="banner-text">
		<h1 style="color:#fff;" class=" title">Ready for Takeoff!</h1>
		<h2>You're off to a great start. Someone will be in touch shortly.</h2>

	<!--<div class="row btn-row">-->
  <br>

		  <a class="btn btn-lg btn-return-home hvr-float-shadow" href="http://repbox.co">Return Home</span></a>

	<!--</div>-->

</div>





	  </div>


	  <!--//container-->
	</section>
	<!--//promo-->



	<?php include("footer.php"); ?>



<!-- Particles -->
<script src="assets/js/rAF.js"></script>

<script src="assets/js/particle.js"></script>
				<!-- scroll-reveal -->



	</body>

</html>
