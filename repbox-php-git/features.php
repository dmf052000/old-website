<?php
	$title = "RepBox - Features";
	include("header.php");
?>
	<link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
	<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="assets/js/stackSheets.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>

<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;

function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	images = images||{};
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", handleFileLoad);
	loader.addEventListener("complete", handleComplete);
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt) {
	if (evt.item.type == "image") { images[evt.item.id] = evt.result; }
}
function handleComplete(evt) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.Untitled2();
	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);
	//Registers the "tick" event listener. try changing this
	fnStartAnimation = function() {
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {
		var lastW, lastH, lastS=1;
		window.addEventListener('resize', resizeCanvas);
		resizeCanvas();
		function resizeCanvas() {
			var w = lib.properties.width, h = lib.properties.height;
			var iw = window.innerWidth, ih=window.innerHeight;
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
			if(isResp) {
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
					sRatio = lastS;
				}
				else if(!isScale) {
					if(iw<w || ih<h)
						sRatio = Math.min(xRatio, yRatio);
				}
				else if(scaleType==1) {
					sRatio = Math.min(xRatio, yRatio);
				}
				else if(scaleType==2) {
					sRatio = Math.max(xRatio, yRatio);
				}
			}
			canvas.width = w*pRatio*sRatio;
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;
			stage.scaleY = pRatio*sRatio;
			lastW = iw; lastH = ih; lastS = sRatio;
		}
	}
	makeResponsive(false,'both',false,1);
	fnStartAnimation();
}
</script>


</head>

<body onload="init();" style="margin:0px;" class="features-page content-management">

	<?php
		$header_logo = "assets/img/logo.png";
		$header_top = "assets/img/logo.png";
		include("menu.php");
	?>

	<div class="bg-slider-wrapper55">
		<div class="flexslider2 bg-slider">
		<!--	<ul class="slides2">
				<li class="slide2 slide-2"></li>
			</ul> -->


	<section class="promo1 section section-on-bg">
		<div class="container text-center">
			<h2 class="title">See How RepBox Can Help You</h2>
			<p>&nbsp;</p>
			<ul class="list-inline main-btns">
				<li>
				  <a class="btn btn-1 btn-1e col-right" href="contact.php">Try for <span style="text-decoration:underline">Free</span></a>
				</li>
				<li>
				  <a class="btn btn-2 btn-2e col-left" href="contact.php">Get in Touch</a></p>
				</li>
			</ul>

		</div>
	</section>

</div>
</div>

	<div class="sections-wrapper">

		<div class="box23">
		<div class="container">
			<div class="col-xs-12">
				<h3 style="text-align:center;" class="title">RepBox Provides a Seamless Platform for MSR's </h3>
				<div class="desc">
					<div class="col-xs-4">
						<div class="img1"><img class="img-responsive" src="assets/images/figures/tier2-44.png"></div>
						<h4>RepBox Saves You Time</h4>
						<p>RepBox allows you to handle everything from one screen. Add an opptornuntiy in under one minute. Update ten opportunities in just two minutes.</p>
					</div>

					<div class="col-xs-4">
						<div class="img1"><img class="img-responsive" src="assets/images/figures/tier2-45.png"></div>
						<h4>Real Time Reporting</h4>
						<p>Keep track of all workflows in one place with custom, advanced reporting. Create a report on the fly, or have automated reports sent right to your inbox.</p>
					</div>

					<div class="col-xs-4">
						<div class="img1"><img class="img-responsive" src="assets/images/figures/tier2-46.png"></div>
						<h4>Commission Tracking & Reconciliation</h4>
						<p>Organize commissions and reconcile payments against invoices. A foolproof platform to ensure accurate payment for a single rep, and the whole organization.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<hr class="eightyPercent">
		<section style="padding-bottom:0px;" id="why" class="section why1">
			<div class="container">
				<div class="row item">
					<figure class="scrollLeft2 figure col-xs-12 col-md-5 img-pad2">
						<div id="animation_container" style="background-color:rgba(255, 255, 255, 0.00); width:310px; height:350px">
							<canvas id="canvas" width="310" height="350" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 0.00);"></canvas>
							<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:310px; height:350px; position: absolute; left: 0px; top: 0px; display: block;">
							</div>
						</div>
					</figure>
					<div class="content col-md-6 col-xs-12 div-pd">
						<h3 class="title">RepBox Consolidates Your Assets</h3>
						<div class="desc">
							<p>RepBox stores and organizes all of your assets in one place. No need to use multiple applications to manage any of your assets. No more need to switch between windows on your device. RepBox is the only window you will need.</p>
							<p>All of your process can be handled through one central location. Your opportunites module becomes your new desktop, where you can store any information, contacts, accounts, quotes, and so forth related to that opportunity. Additionally, Repbox handles all of your commissions, products, invoicing, and more.</p>
						</div>
					</div>

				</div>
			</div>
			<section id="blueRow">
						<div class="containerBlue">
							<div class="row item">
								<div class="content col-xs-12 col-md-5 div-pd2">
									<h3 class="title" style="color:#fff">Advanced Reporting</h3>
									<div class="desc">
										<p><strong>Real Time Professional Reports.</strong> Generate immediate reports, on the fly, across multiple modules with accuracy and precision.</p>
										<p><strong>Automated Reporting.</strong> Preset reports to automatically generate and send directly to your inbox. Houry, weekly, monthly, yearly... you name it!</p>
										<p><strong>Commission & Sales Reports.</strong> Never lose track of your commissions and sales flow again. Our reports will organize and help you reconcile your commissions.<p>

									</div>
								</div>
								<div class="figure-report  col-xs-12 col-md-7 ">  </div>
							</div>
						</div>
					</section>

			<div class="box2">
				<div class="container">
					<div class="row item">
						<div class="col-xs-12 col-md-7">
							<img class="scrollLeft integrated img-responsive" src="assets/images/figures/integration.png" alt="" />
						</div>

						<div class="col-xs-12 col-md-5">
							<h3 class="title">RepBox Integrates</h3>
							<div class="desc">
								<p><strong>Integration With Apps.</strong> RepBox not only allows you to store your assets and track your workflows internally, but it integrates with your own apps.</p>
								<p><strong>Seamless Export & Import.</strong> Harmoniously sync your apps to RepBox so you never have to download and upload data again. </p>
								<p><strong>Other Apps To Access Repbox.</strong>We integrate with Corrensa so you can access RepBox through your Gmail and Office 365 and manage your accounts right there.</p>
							</div>
						</figure>
						</div>
					</div>
				</div>
			</div>

		<section id="blueRow">
						<div class="containerBlue">
							<div class="row item">
								<div class="content col-xs-12 col-md-5 div-pd2">
									<h3 class="title" style="color:#fff">Tactical Support</h3>
									<div class="desc">
										<p><strong>Training & Onboarding.</strong> Everyone in your organization gets a full onboarding experience. We will tailor your training experience to your needs.</p>
										<p><strong>Around The Clock Support.</strong> Our support technicians are here for you. Check our documentation & tutorials, submit a ticket, or give us a call!</p>
										<p><strong>Help Desk & Slack.</strong> Along with our helpdesk, we have currently integrated with slack for a whole other level of support experience. Call us to find out more!</p>


									</div>
								</div>
								<div class="dream-figure col-xs-12 col-md-7 ">  </div>
							</div>
						</div>
					</section>

			<div class="box222">
				<div class="text-center container desc cont2">
					<div class="row item last-item">
						<h3 style="text-align:center" class="title">And So Much More </h3>
						<div class="scrollCloud col-md-4">
							<img src="assets/images/figures/cloud.png" />
							<p><strong>Cloud-Based Platform.</strong></p>
							<p>RepBox stores all of your data and files in cloud-based instances, which means freeing up space on your computer, while having complete control.</p>
						</div>
						<div class="scrollLock col-md-4">
							<img src="assets/images/figures/lock.png" />
							<p><strong>Total Security.</strong></p>
							<p>Your security is our number 1 priority. RepBox keeps all of your data and information stored in your own personal server, with precision encryption.</p>
						</div>
						<div class="scrollMap col-md-4">
							<img src="assets/images/figures/map.png" />
							<p><strong>Global Access.</strong></p>
							<p>Your personal RepBox can be accessed from anywhere, anytime. All you need is a browser, your personal RepBox url, and your login information and you are good to go!</p>
						</div>
					</div>

				</div>
			</div>

	</div>

	<section id="cta-section24" class="section cta-section22 text-center home-cta-section">
		<div class="container">
			<h3 class="title" style="text-align:center;">Get Started with RepBox Today</h3>
			<div class="col-md-6">
				<p style="margin:0 auto"><a class="btn btn-cta btn-cta-primary col-right-foo" href="contact.php">Get in Touch</a></p>
			</div>
			<div class="col-md-6">
				<p style="margin:0 auto"><a class="btn btn-cta btn-cta-primary col-left-foo" href="contact.php">Try Now</a></p>
			</div>
		</div>
	</section>

	<?php include("footer.php"); ?>

	<!-- Vimeo video API --
	<script src="../../../a.vimeocdn.com/js/froogaloop2.min.js"></script>-->
	<script type="text/javascript" src="assets/js/vimeo.js"></script>

	<!-- scroll-reveal -->
<script>
		window.sr = ScrollReveal();

	sr.reveal('.scrollLeft', {
reset: false,
origin: 'left',
distance: '120%',
opacity: 0,
delay: 100,
duration: 700,
rotate: { x: 0, y: 0, z: 0 },
easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
//  useDelay: 'once',
viewFactor: 0.2,

} , 150);

sr.reveal('.scrollLeft2', {
reset: false,
origin: 'left',
distance: '120%',
opacity: 0,
delay: 100,
duration: 700,
rotate: { x: 0, y: 0, z: 0 },
easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
//  useDelay: 'once',
viewFactor: 0.2,

} , 150);

sr.reveal('.scrollCloud', {
reset: false,
origin: 'right',
distance: '20%',
opacity: 0,
delay: 100,
duration: 700,
rotate: { x: 0, y: 0, z: 0 },
easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
//  useDelay: 'once',
viewFactor: 0.2,

} , 150);

sr.reveal('.scrollLock', {
reset: false,
origin: 'bottom',
distance: '',
opacity: 0,
delay: 100,
duration: 700,
rotate: { x: 0, y: 0, z: 0 },
easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
//  useDelay: 'once',
viewFactor: 0.2,

} , 150);

sr.reveal('.scrollMap', {
reset: false,
origin: 'left',
distance: '20%',
opacity: 0,
delay: 100,
duration: 700,
rotate: { x: 0, y: 0, z: 0 },
easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
//  useDelay: 'once',
viewFactor: 0.2,

} , 150);

</script>


	</body>



	<!--<div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
				</div>
				<div class="modal-body">
					<div class="video-container">
						<iframe id="vimeo-video" src="http://player.vimeo.com/video/28872840?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>-->

</html>
