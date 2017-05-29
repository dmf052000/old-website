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

	<section id="large-header" class="promo section section-on-bg">
		<div class="row text-center imgContainer">
			<div class="col-md-12">
				<img class="laptopImg img-responsive" src="assets/images/figures/laptop.png">
			</div>
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
		<h2 class="element title"><span class="hidden">The #1 Platform for Manufacturer Reps</span></h2>
		<h4 class="intro">Easy to use CRM &amp; sales platform for managing all your lines</h4>

	<!--<div class="row btn-row">-->
	<ul class="list-inline main-btns">
		<li class="fade-in one ">
		  <a class="fancybox fitVideo fancybox.iframe btn btn-1 btn-1e col-right" href="assets/Videos/Repbox-video.mp4" title="Repbox CRM">Watch Video </a>
		</li>
		<li class="fade-in one ">
		  <a class="btn btn-2 btn-2e col-left" href="contact.php">Try for <span style="text-decoration:underline">Free</span></a>
		</li>
	</ul>
	<!--</div>-->

</div>





	  </div>


	  <!--//container-->
	</section>
	<!--//promo-->


<!--<div class="container imgContainer1">
	<div class="row text-center imgContainer">
		<div class="col-md-12">
			<img class="laptopImg img-responsive" src="assets/images/figures/laptop.png">
		</div>
	</div>
</div>-->

	<!--//container-->


	<div class="sections-wrapper box-hh">
		<div class="box444">
			<section class="topIcons">
			<div class="container cont2 heading_sect1">
				<h3>RepBox makes managing your lines a breeze because it's...</h3>
<div class="row">
				<div class="scrollCloud col-md-4 col-xs-12 ">
					<div class="box4">
						<img class="img-responsive" src="assets/images/figures/customize3-2.png">
					</div>
					<h5><strong>Customized</strong> and preconfigured so that your RepBox can conform to how you already do business</h5>
				</div>

				<div class="scrollLock col-md-4 col-xs-12 ">
					<div class="box4">
						<img class="img-responsive" src="assets/images/figures/collaborators.png">
					</div>
					<h5><strong>Collaborative</strong> by design so that everyone can work together in real time and stay in sync </h5>
				</div>
				<div class="scrollMap col-md-4 col-xs-12 ">
					<div class="box4">
						<img class="img-responsive" src="assets/images/figures/cloud-engineLock.png">
					</div>
					<h5><strong>Powerful</strong> cloud-based engine lets you store, edit, sync, and generate reports securely and on the fly </h5>
				</div>
			</div>
		</div>
		</section>

		<div class="fourth_sec_wrap">
			<div class="leftText_rightImage">
				<div class="row_flex">
					<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
						<div class="left">
							<div class="top">
								<h3>Software that supports what you do with ease and flexibility.</h3>
							</div>
							<div class="mid">
								<p>By helping you and your team track, record, and organize your processes all in one place, RepBox is the number 1 catalyst in streamlining all of your workflows.  </p>
							</div>
							<div class="bottom ">
								<a href="features.php">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Press Logo Banner-->
		<!--		<section class="section press">
				<div class="container text-center">
					<ul class="press-list list-inline row">
						<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="assets/images/logos/office.png" alt="" /></a></li>
						<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="assets/images/logos/google.png" alt="" /></a></li>
						<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="assets/images/logos/yahoo.png" alt="" /></a></li>
						<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="assets/images/logos/excel.png" alt="" /></a></li>
						<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="assets/images/logos/windows.png" alt="" /></a></li>
						<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="assets/images/logos/applelogo.png" alt="" /></a></li>
					</ul>
				</div>
			</section> -->

			<!-- ******Dashboard****** -->
			<section id="why" class="section why1">
				<div class="container">
					<div class="item">

						<!--//content-->
						<figure class="figure col-md-offset-1 col-sm-offset-0 col-xs-offset-0 col-xs-12 col-md-6 col-md-push-6"> <img class="img-responsive wid-img" src="assets/images/figures/dashboard.jpg" alt="" /> </figure>
						<div class="content col-xs-12 col-md-6 div-pd col-md-pull-6">
							<h3 class="title opt-heading1">Dashboard</h3>
							<div class="desc">
								<ul>
									<li><i class="scrollCheck fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; All of your metrics on your front page</li>
									<li><i class="scrollCheck fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Updates, reports, commissions and more</li>
									<li><i class="scrollCheck fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; A snapshot of everything important to you</li>
									<li><i class="scrollCheck fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Customized and tailored to your preference</li>
								</ul>
								<!--//quote-->
							</div>
						<!--//quote-->
						</div>
					</div>
					<!--//item-->
				</div>
				<!--//container-->
			</section>
			<!--//why-->
<!-- <hr class="main-hr"> -->

			<section id="why" class="section dashboard1">
				<div class="container">
					<div class="item">
						<div class="col-xs-12 col-md-6"> <img class="img-responsive wid-img" src="assets/images/figures/Opp-view.jpg" alt="" /> </div>

						<div class="col-xs-12 col-md-6">
							<h3 class="title opt-heading">Opportunities</h3>
							<div class="desc list_space">
								<ul>
									<li><i class="scrollCheck1 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Attach any related records to an opportunity  </li>
									<li><i class="scrollCheck1 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Post "Notes" and track updates for each opp</li>
									<li><i class="scrollCheck1 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Sync your inbox to view and link your emails</li>
									<li><i class="scrollCheck1 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Stay focused by never having to leave to screen</li>
								</ul>
							</div>
						</div>
						<!--//item-->
					</div>
				</div>
			<!--//container-->
			</section>
			<!--//why-->

			<div class="fifth_sec_wrap">
				<div class="leftText_rightImage">
					<div class="row_flex">
						<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
							<div class="left">
								<div class="top">
									<h3>Premium Integration</h3>
								</div>
								<div class="mid">
									<p>RepBox works great on all platforms, and integrates with plenty of apps that most MSR's already use.</p>
								</div>
								<div class="row">
									<div class="col-md-3 col-xs-6">
										<div class="img-responsive-parent">
										<img class="logoAppear img-responsive" src="assets/images/logos/windows-logo-white.png"/>
									</div>
								</div>
									<div class="mobile-no-border col-md-3 col-xs-6">
										<div class="img-responsive-parent">
										<img class="logoAppear img-responsive" src="assets/images/logos/apple-logo-white.png"/>
									</div>
									</div>
									<div class="col-md-3 col-xs-6">
										<div class="img-responsive-parent">
										<img class="logoAppear img-responsive" src="assets/images/logos/google-logo-white.png"/>
									</div>
									</div>
									<div class="mobile-no-border no-border col-md-3 col-xs-6">
										<div class="img-responsive-parent">
										<img class="logoAppear img-responsive" src="assets/images/logos/365-logo-white.png"/>
									</div>
									</div>
									<div class="col-md-3 col-xs-6">
										<div class="img-responsive-parent">
										<img class="logoAppear img-responsive" src="assets/images/logos/dropbox-logo-white.png"/>
									</div>
									</div>
									<div class="mobile-no-border col-md-3 col-xs-6">
										<div class="img-responsive-parent">
										<img class="logoAppear img-responsive" src="assets/images/logos/quickbooks-logo-white.png"/>
									</div>
									</div>
									<div class="col-md-3 col-xs-6">
										<div class="img-responsive-parent">
										<img class="logoAppear img-responsive" src="assets/images/logos/gsuite-logo-white.png"/>
									</div>
									</div>
									<div class="mobile-no-border no-border col-md-3 col-xs-6">
										<div class="img-responsive-parent">
										<img class="logoAppear img-responsive" src="assets/images/logos/excel-logo-white.png"/>
									</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<section id="why" class="section why1">
				<div class="container">
					<div class="item">

						<figure class="figure col-md-offset-1 col-sm-offset-0 col-xs-offset-0 col-xs-12 col-md-6 col-md-push-6">
							<img class="img-responsive wid-img" src="assets/images/figures/sqlreport.jpg" alt="" />
						</figure>
						<div class="content col-xs-12 col-md-6 div-pd col-md-pull-6">
							<h3 class="title opt-heading1">Reporting</h3>
							<div class="desc">
								<ul>
									<li>
										<i class="scrollCheck2 fa fa-check" aria-hidden="true"></i>
										&nbsp;&nbsp; Generate any report with just a few clicks
									</li>
									<li><i class="scrollCheck2 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; We will setup your initial reports for you</li>
									<li><i class="scrollCheck2 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Customize any report the way you want</li>
									<li><i class="scrollCheck2 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Automate reports to be automatically emailed</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

<!-- <hr class="main-hr"> -->

			<section id="why" class="section dashboard1">
				<div class="container">

						<div class="item last-item">
							<div class="col-xs-12 col-md-6">
								<img class="img-responsive wid-img" src="assets/images/figures/Opp-view.jpg" alt="" />
							</div>
							<div class="col-xs-12 col-md-6 last-div">
								<h3 class="title opt-heading">Commission Reconciliation</h3>
								<div class="desc list_space">
									<ul>
										<li><i class="scrollCheck3 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Import your commission statements directly into RepBox</li>
										<li><i class="scrollCheck3 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Link multiple aliases (different spelling) of each account</li>
										<li><i class="scrollCheck3 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; Give permissions for who is allowed to view commissions</li>
										<li><i class="scrollCheck3 fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; View sales reports such as Month/Month and Year to Date</li>
									</ul>
								</div>
							</div>
						</div>

				</div>
			</section>

			<!-- ******Testimonials Section****** -->
			<section class="section testimonials">
				<div class="container">
					<div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
						<!--//carousel-indicators-->
						<h3 align="center">What are people saying about RepBox?</h3>
						<div class="carousel-inner">
							<div class="item active">
								<figure class="profile"><img src="assets/images/people/emily2.png" alt="" /></figure>
								<div class="content">
									<blockquote>
									<!--	<i class="fa fa-quote-left"></i> -->
										<p> "RepBox has kept me more organized. All my quotes are in one place, it saves me time, and simplifies the task of customer data entry. It makes it easy to get all my information in one place without multiple steps." </p>
									</blockquote>
									<p class="source">
										<strong>Emily M.</strong> <br />
										<span class="title">Sales Rep, RepWorx</span>
									</p>
								</div>
							</div>
							<!--//item-->
							<div class="item">
								<figure class="profile"><img src="assets/images/people/tony.png" alt="" /></figure>
								<div class="content">
									<blockquote>
										<!--	<i class="fa fa-quote-left"></i> -->
										<p>As a partner in Cinpak Inc, with 18 employees, the most valued / costly asset we have is our "TIME" and where we spend it. RepBox Sales Platform saves us 2-5 hours every week per employee, allowing us to spend that time on what's really important Selling and Driving Revenue!"</p>
									</blockquote>
									<p class="source">
										<strong>Tony Lasita</strong><br />
										<span class="title">President, Cinpak</span>
									</p>
								</div>
							</div>
							<!--//item-->
							<div class="item">
								<figure class="profile"><img src="assets/images/people/tommy.png" alt="" /></figure>
								<div class="content">
									<blockquote>
										<!--	<i class="fa fa-quote-left"></i> -->
										<p>"The best way I can describe our experience is going from the dark into the light. We were searching for the right manufacturer’s Representative CRM and quickly found out our options were very limited. Luckily, I was introduced to David Fields and his team at RepBox. RepBox fits our needs from principal reporting, target account tracking, customization and first in class customer support and service. David has taken a vested interest in our agency and making sure all of our needs are met and we have more than a CRM out of a box, we have a partnership in RepBox. If you are truly looking for a CRM you can make your own and work directly with David and his team to meet your goals and objectives then Repobx is your answer."</p>
									</blockquote>
									<p class="source">
										<strong>Tommy Garnett</strong><br />
										<span class="title">President, Garnett Component Sales </span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<section id="contactSection" class="promo11 section section-on-bg">
		<div class="container text-center">

			<h3><strong>Contact Us</strong></h3>

			<div class="col-md-5 mar-div">
				<p>RepBox makes MSR's better by simplifying, capturing, and automating their daily activities</p>
				<ul>
					<li><strong>Anywhere, Anytime Access.</strong> With unlimited cloud storage and access to all your files, you can view, share and edit 120+ file types, whether you're online or off.</li>
					<li><strong>Automatic Links.</strong> Links End User's / Distributors / DSR's / Principals and more together</li>
					<li><strong>A Shared Online Platform.</strong> With Microsoft Office 365 and Google Apps integrations, you can link your emails to whatever you are working, directly in RepBox.</li>
					<li><strong>Admin Controls.</strong> Add new fields, lists, workflows, etc. to help customize the system for how you do business</li>
				</ul>
				<p>Ready to discover what's possible with RepBox? Fill out the form and we'll reach out to walk you through what your rep agencies needs to start working smarter and more efficiently with RepBox.</p>
			</div>

			<div class="col-md-6 div-quote">
				<?php
				if(isset($_POST['contact-submit'])) {

				if( isset( $_POST['g-recaptcha-response'] ) && !empty( $_POST['g-recaptcha-response'] ) ) {

							//your site secret key
							$secret = '6LcIOBwUAAAAAMM2t-SLy-bbUBADz7h0NrKj-nTL';
							//get verify response data
							$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
							$responseData = json_decode($verifyResponse);
							if($responseData->success) {
								//contact form submission code
								$to = "dave@repbox.co, devlin@repbox.co, micah@repbox.co,";
								$from = $_POST['email'];
								$firstname = $_POST['firstname'];
								$lastname = $_POST['lastname'];
								$phone = $_POST['phone'];
								$state = $_POST['state'];
								$company = $_POST['company'];
								$type = $_POST['type'];
								$wecan_help = $_POST['description'];
								$subject = "Contact Us";
								$subject2 = "Copy of your form submission";
								$message = '<table>
									<tr><th>First Name</th><td>'.$firstname.'</td></tr>
									<tr><th>Last Name</th><td>'.$lastname.'</td></tr>
									<tr><th>Email Address</th><td>'.$from.'</td></tr>
									<tr><th>Phone</th><td>'.$phone.'</td></tr>
									<tr><th>Company Size</th><td>'.$state .'</td></tr>
									<tr><th>Company Name</th><td>'.$company .'</td></tr>
									<tr><th>Request Type</th><td>'.$type .'</td></tr>
									</table>';
								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
								$headers .= 'From: '.$firstname.'<'.$from.'>' . "\r\n";
								mail($to,$subject,$message,$headers);

								$message = 'Your contact request have submitted successfully.';
							} else {
								$errMsg = 'Robot verification failed, please try again.';
							}
					} else {
						$errMsg = '';
						$succMsg = '';
					}
				}
				?>

				<form id="contact_form" class="well1 form-horizontal" name="Website Contact Form" action="https://mothership.repbox.co/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
					<input type="hidden" name="__vtrftk" value="sid:7bed7fb2594152114ef0945ec2fed6ac1f14bcaf,1494560332">
	<input type="hidden" name="publicid" value="6c0d70bf50ca06180efd5c913984ccb4">
	<input type="hidden" name="name" value="Website Contact Form">
	<input type="hidden" name="action" value="contact_us" />



					<div class="form-group">
						<label class="col-md-3 control-label">First Name*</label>
						<div class="col-md-8 inputGroupContainer">
							<div class="input-group">
								<input  name="firstname" class="form-control" type="text" data-validation="required" value="<?php echo $_POST['firstname']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" >Last Name*</label>
						<div class="col-md-8 inputGroupContainer">
							<div class="input-group">
								<input name="lastname"  class="form-control"  type="text"  value="<?php echo $_POST['lastname']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Email Address*</label>
						<div class="col-md-8 inputGroupContainer">
							<div class="input-group">
								<input name="email" class="form-control" type="text" value="<?php echo $_POST['email']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Phone*</label>
						<div class="col-md-8 inputGroupContainer">
							<div class="input-group">
								<input name="phone"  class="form-control" type="text" value="<?php echo $_POST['phone']; ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Company </label>
						<div class="col-md-8 inputGroupContainer">
							<div class="input-group">
								<input name="company"  class="form-control" type="text" value="<?php echo $_POST['company']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Company Size</label>
						<div class="col-md-8 selectContainer">
							<div class="input-group">
								<select name="label:Company_Size" class="form-control selectpicker" >
									<option value="- Select a value -" >- Select a value -</option>
									<option value="1 To 5" <?php echo (isset($_POST['state']) && $_POST['state'] == "1 To 5")? "selected" :""; ?>>1-5</option>
									<option value="6 To 10" <?php echo (isset($_POST['state']) && $_POST['state'] == "6 To 10")? "selected" :""; ?>>6-10</option>
									<option value="11 To 20" <?php echo (isset($_POST['state']) && $_POST['state'] == "11 To 20")? "selected" :""; ?>>11-20</option>
									<option value="21 To 30" <?php echo (isset($_POST['state']) && $_POST['state'] == "21 To 30")? "selected" :""; ?>>21-30</option>
									<option value="31 To 50" <?php echo (isset($_POST['state']) && $_POST['state'] == "31 To 50")? "selected" :""; ?>>31-50</option>
									<option value="51+" <?php echo (isset($_POST['state']) && $_POST['state'] == "51+")? "selected" :""; ?>>51+</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Reason For Contact*</label>
						<div class="col-md-8 selectContainer">
							<div class="input-group">
								<select name="label:Lead_Contact_Type" class="form-control selectpicker">
									<option value="Not Specified" >- Select One -</option>
									<option value="General Inquiry" <?php echo (isset($_POST['type']) && $_POST['type'] == "General Inquiry")? "selected" :""; ?>>General Inquiry</option>
									<option value="Demo Request" <?php echo (isset($_POST['type']) && $_POST['type'] == "Demo Request")? "selected" :""; ?>>Demo Request</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Let us know how we can help  </label>
						<div class="col-md-8 selectContainer">
							<div class="input-group">
								<textarea class="js-text-full text-full form-control"  name="description" rows="5" cols="52" placeholder=""><?php echo $_POST['wecan_help']; ?></textarea>
							</div>
						</div>
					</div>
					<input type="hidden" name="label:Lead_From" value="RepBox Website Home Page">

					<div class="form-group"></div>

					<?php if($error): ?>
						<div class="alert alert-danger" role="alert" id="error_message" style="text-align: center;"><?php echo $error; ?></div>
					<?php endif; ?>

					<?php if($message): $_POST = array(); ?>
						<div class="alert alert-success" role="alert" style="text-align: center;"><?php echo $message; ?></div>
					<?php endif; ?>

					<!-- Success message -->
					<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

					<!-- Button -->
					<div class="form-group">
						<div class="col-md-3"></div>
						<div class="col-md-8 submitbtnn">
							<button type="submit" name="contact-submit" class="btn btn-warning btn-block indexSubmit" >submit </button>


						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3"></label>
						<div class="col-md-8 selectContainer">
							<div class="g-cap input-group">
								<div class="g-recaptcha" name="recaptcha" data-validation="required" data-sitekey="6LcIOBwUAAAAAF7wELD07sj2wVsCmFRvSXbpJ2zY" ></div>
								<input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
							</div>
						</div>
					</div>


				</form>
			</div>
		</div>
	</section>

	<!-- ******CTA Section****** -->
	<section id="cta-section" class="section cta-section text-center home-cta-section">
		<div class="container">
			<h3 class="title">Ready to Get Started?</h3>
			<ul class="footer-btns list-inline main-btns">
				<li>
				  <a class="btn btn-1 btn-1e col-right" href="http://repbox.co/request-a-demo.php" title="Repbox CRM">Request a Demo</a>
				</li>
				<li>
				  <a class="btn btn-2 btn-2e btn-2e-blue col-left" href="contact.php">Try for <span style="text-decoration:underline">Free</span></a>
				</li>
			</ul>

		</div>
	</section>

	<div id="login" style="width: 400px; display: none;">
		<p id = "Success" style = "text-align:center;color:green;margin-bottom: 10px;margin-top: 30px;display:none;"></p>
		<p id = "Error" style = "text-align:center;color:red;margin-bottom: 10px;margin-top: 30px;display:none;"></p>
		<div class = "containerBlock">
			<form id="signup" name="signup" action="" method="POST">
				<p class="col-lg-12">
					<label class="col-lg-8">First Name: </label>
					<input type = "hidden" name = "is_page_loaded" id = "is_page_loaded" value = "0"/>
					<input type="text" name="firstname" id="firstname" class="col-lg-11" value="" required/>
				</p>
				<p class="col-lg-12">
					<label class="col-lg-8">Last Name: </label>
					<input type="text" name="lastname" id="lastname" class="col-lg-11" value="" required/>
				</p>
				<p class="col-lg-12">
					<label class="col-lg-8">Email: </label>
					<input type="text" name="email" id="email" class="col-lg-11" value="" required/>
				</p>
				<p class="col-lg-12">
					<label class="col-lg-8">Company Name: </label>
					<input type="text" name="domain" id="domain" class="col-lg-11" value=""required />
				</p>
				<p class="col-lg-12 text-center">
					<input type="button" id="signup_form" value="Submit" class="btn btn-cta btn-cta-secondary"/>
				</p>
			</form>
			<p class="col-lg-12" style="width: 85%;text-align: center;border-bottom: 1px solid black;height: 15px;margin-left: 5%;">
				<span style="padding: 0 10px; background: #f9f9f9; ">Or</span>
			</p>
			<div id="g-signin2" style = "margin-left:20%;" ></div>
		</div>
	</div>

	<?php include("footer.php"); ?>


		<script type="text/javascript">
			$(document).ready(function() {
				$.validator.addMethod("valueNotEquals", function(value, element, arg){
  			return arg != value;
 				}, "Value must not equal arg.");
					$("#contact_form").validate({
					rules: {

						firstname: {
							required: true,
							minlength: 2,

						},
						lastname: {
							required: true,
							minlength: 2
						},
						phone: {
							required: true,
							digits: true,
							minlength: 10
						},

			/*			'label:Lead_Contact_Type': {
							SelectName: {
								valueNotEquals: "default"
							}
						}, */

						email: {
							required: true,
							email: true
						},


						hiddenRecaptcha: {
							required: function () {
								if (grecaptcha.getResponse() == '') {
									return true;
								} else {
									return false;
								}
							}
						},


					},
					messages: {

						firstname: {
							required: "Please enter first name",
							minlength: "Name should be at least 2 Char"
								},
						lastname: {
							required: "Please enter last name",
							minlength: "Name should be at least 2 Char"
								},
						phone: {
							required: "Please enter Phone No",
							minlength: "Evening Phone should be 10 Digit"
							},

						email: {
							required: "Please enter valid email address"
						},

				/*		'label:Lead_Contact_Type': {
							SelectName: {
								valueNotEquals: "Please select an item!"
							}
						}, */

						hiddenRecaptcha: {
							required: "Please click on the reCAPTCHA box"
						},


					}
				});

			});
		</script>

		<!-- Typed JS -->
		<script>


			//Typed JS

			$(function(){
					$(".element").typed({
						strings: ["The #1 Platform ^550 for Manufacturer Reps."],
						typeSpeed: 70,
						startDelay: 1500,
					 backDelay: 500,
						loop: false,
						showCursor: false,

					});
				});

				</script>

<!-- Particles -->
<script src="assets/js/rAF.js"></script>

<script src="assets/js/particle.js"></script>
				<!-- scroll-reveal -->

				<script src="assets/js/scrollreveal.min.js"></script>
		<script>
				  window.sr = ScrollReveal();

					sr.reveal('.scrollCheck', {
					reset: false,
					origin: 'bottom',
					distance: '10%',
					opacity: 0,
					delay: 100,
					duration: 700,
					rotate: { x: 0, y: 0, z: 0 },
					easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
					//  useDelay: 'once',
					viewFactor: 0.5,

				} , 250);

				sr.reveal('.scrollCheck1', {
				reset: false,
				origin: 'bottom',
				distance: '10%',
				opacity: 0,
				delay: 100,
				duration: 700,
				rotate: { x: 0, y: 0, z: 0 },
				easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
				//  useDelay: 'once',
				viewFactor: 0.5,

			} , 250);

			sr.reveal('.scrollCheck2', {
			reset: false,
			origin: 'bottom',
			distance: '10%',
			opacity: 0,
			delay: 100,
			duration: 700,
			rotate: { x: 0, y: 0, z: 0 },
			easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
			//  useDelay: 'once',
			viewFactor: 0.5,

		} , 250);

		sr.reveal('.scrollCheck3', {
		reset: false,
		origin: 'bottom',
		distance: '10%',
		opacity: 0,
		delay: 100,
		duration: 700,
		rotate: { x: 0, y: 0, z: 0 },
		easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
		//  useDelay: 'once',
		viewFactor: 0.5,

	} , 250);


	 sr.reveal('.scrollCloud', {
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

	sr.reveal('.scrollLock', {
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

	sr.reveal('.logoAppear', {
	reset: false,
	origin: 'bottom',
	distance: '20%',
	opacity: 0,
	delay: 100,
	duration: 700,
	rotate: { x: 0, y: 0, z: 0 },
	easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
	//  useDelay: 'once',
	viewFactor: 0.3,

} , 200);
				</script>


	</body>

</html>
