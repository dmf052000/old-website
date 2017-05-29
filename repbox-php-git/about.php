<?php
	$title = "about";
	include("header.php");
	include_once("analyticstracking.php");
?>
	<link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="about-us">

	<?php
		$header_logo = "assets/img/logo1.png";
		$header_top = "assets/img/logo.png";
		include("menu.php");
	?>

	<div class="bg-slider-wrapper1">
		<div class="flexslider2 bg-slider">
			<ul class="slides2">
				<li class="slide2 slide-2"></li>
			</ul>
		</div>
	</div>

	<section class="promo1 section section-on-bg">
		<div class="container text-center">
			<h2 class="title">Secure File Sharing for the Modern Workplace</h2>
			<p class="intro1">Keeping files in sync is simple with RepBox, so you can get work done<br> wherever you are</p>
			<div class="col-md-6">
				<p style="margin:0 auto"><a class="btn btn-cta btn-cta-primary col-right" href="signup.php">Download Report</a></p>
			</div>
			<div class="col-md-6">
				<p style="margin:0 auto"><a class="btn btn-cta btn-cta-primary col-left" href="tryrepbox.php">Try Now</a></p>
			</div>
		</div>
	</section>

	<div class="sections-wrapper">

		<section id="why" class="section why1">
			<div class="container">
				<div class="row item">
					<div class="content col-xs-12 col-md-5 div-pd">
						<h3 class="title">More Team. Less Work.</h3>
						<div class="desc">
							<p><strong>Ditch Email Attachments.</strong> With your files in the cloud, you can easily share them with anyone—even if they're outside your company firewall—with a simple link via email or straight from RepBox.</p>
							<p><strong>Keep Sensitive Files Secure.</strong> Share confidential documents with password-protected links, set expiration dates on shared links or delete them so files are shared with who you want, when you want.</p>
							<p><strong>Preview Files Without Download.</strong> With RepBox, you can view 120+ types of files, including Word, Excel, PDF, AI, EPS, PSD, photos and more—without downloading a single file.</p>
							<a href="/collaboration" class="cta-small">Discover RepBox Collaboration Features</a>
						</div>
					</div>
					<figure class="figure col-md-offset-1 col-sm-offset-0 col-xs-offset-0 col-xs-12 col-md-7"> <img class="img-responsive" src="assets/images/figures/sync.png" alt="" /> </figure>
				</div>
			</div>

			<div class="box2">
				<div class="container">
					<div class="row item">
						<div class="col-xs-12 col-md-7"> <img class="img-responsive" src="assets/images/figures/sync2.png" alt="" /> </div>

						<div class="col-xs-12 col-md-5">
							<h3 class="title">Always in Sync. Always Secure.</h3>
							<div class="desc">
								<p><strong>Secure, Easy Access From Anywhere.</strong> Mirror and synchronize all of your RepBox content to your desktop with RepBox Sync, and securely access and share files from any device. </p>
								<p><strong>Keep Everybody on the Same Page.</strong> Share files and folders, add, move or edit files easily, and always have the latest file version at hand. </p>
								<p><strong>Streamline Projects. Accelerate Workflows.</strong> When you create or edit a file in a shared and synced folder, team members receive automatic updates so they can quickly review any changes.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box22">
				<div class="container">
					<div class="row item div-abo">
						<div class="content col-xs-12 col-md-7 ">
							<div class="desc">
								<p class="our-p">“Our success depends on meeting consumers desires, needs and lifestyles. To achieve this, our employees must be able to execute and innovate, at anytime and from anywhere. RepBox has been critical to creating a more productive and collaborative workforce that can focus on inspiring creativity, passion, optimism and fun.”</p>
								<p><strong>Alan Boehme, Global CTO, Coca-Cola Company</strong></p>
								<a href="/collaboration" class="cta-small">Build with RepBox Platform</a>
							</div>
						</div>
						<figure class="figure col-md-offset-1 col-sm-offset-0 col-xs-offset-0 col-xs-12 col-md-5"> <img class="img-responsive" src="assets/images/figures/07b_Quote+Image_Coke_0.png" alt="" /> </figure>
					</div>
				</div>
			</div>

			<div class="box222">
				<div class="container cont2">
					<div class="row item last-item">
						<div class="col-xs-12 col-md-7"> <img class="img-responsive" src="assets/images/figures/Homepage Graphic+r+disclaimer (1).png" alt="" /> </div>
						<div class="col-xs-12 col-md-5 last-div">
							<h3 class="title">Gartner Names RepBox a Leader for 3 Years in a Row</h3>
							<p><b>Download the Gartner 2016 Magic Quadrant Now</b></p>
							<div class="desc">
								<p>The 2016 Gartner Magic Quadrant can help your organization:</p>
								<ul>
									<li>Get educated about which EFSS solutions are best for your business</li>
									<li>Narrow down your search of tools to short list or demo selections</li>
									<li>Evaluate vendors that fit your needs and business goals</li>
								</ul>
								<a href="/collaboration" class="cta-small">Get the Report</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section id="cta-section1" class="section cta-section1 text-center home-cta-section">
		<div class="container">
			<h3 class="title">Transform How You Share and Manage Content with RepBox</h3>
			<div class="col-md-12 abo-div">
				<p style="margin:0 auto"><a class="btn btn-cta btn-cta-primary col-left-foo" href="tryrepbox.php">Try Now</a></p>
			</div>
		</div>
	</section>

	<!--<footer class="footer">
		<div class="bottom-bar">
			<div class="container">
				<div class="footer-copyright">
					<ul class="footer-menu">
						<li>&copy;2016 RepBox</li>
						<li><a href="/resources/sitemap">Sitemap</a></li>
						<li><a href="/legal/termsofservice">Terms of Use</a></li>
						<li><a href="/legal/privacypolicy">Privacy Policy</a></li>
					</ul>

				</div>
				<ul class="footer-social-icons">
					<li><a href="#"<i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					<li><a href="#" <i class="fa fa-rss" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				</ul>
			</div>
		</div>
	</footer>-->

	<!-- Video Modal -->
	<!--<div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
				</div>
				<div class="modal-body">
					<div class="video-container">
						<iframe id="vimeo-video" src="https://player.vimeo.com/video/28872840?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!--//modal-->

	<?php include("footer.php"); ?>

	<!-- Vimeo video API -->
	<script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
	<!--<script src="../../../a.vimeocdn.com/js/froogaloop2.min.js"></script>-->
	<script type="text/javascript" src="assets/js/vimeo.js"></script>

	</body>
</html>
