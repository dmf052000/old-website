

<?php
	$title = "Contact Us";
	include("header.php");
	include_once("analyticstracking.php");
?>
	<link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="content-management">

	<?php
		$header_logo = "assets/img/logo.png";
		$header_top = "assets/img/logo.png";
		include("menu.php");
		$message = $error = "";
		include("includes/Repbox.php");
	?>
	<div class="bg-slider-wrapper55">

	</div>

	<section class="promo11 signup1 section section-on-bg">
		<div class="container text-center">
			<div class="cont5">
				<h2>How can we help?</h2>
				<p>RepBox makes MSR's better by simplifying, capturing, and automating their daily activities</p>
			</div>
			<div class="col-md-5 div-quote14">


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
							$first_name = $_POST['first_name'];
							$last_name = $_POST['last_name'];
							$phone = $_POST['phone'];
							$state = $_POST['state'];
							$wecan_help = $_POST['wecan_help'];
							$subject = "Contact Us";
							$subject2 = "Copy of your form submission";
							$message = '<table>
								<tr><th>First Name</th><td>'.$first_name.'</td></tr>
								<tr><th>Last Name</th><td>'.$last_name.'</td></tr>
								<tr><th>Email Address</th><td>'.$from.'</td></tr>
								<tr><th>Phone</th><td>'.$phone.'</td></tr>
								<tr><th>Company Size</th><td>'.$state .'</td></tr>
								</table>';
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							$headers .= 'From: '.$first_name.'<'.$from.'>' . "\r\n";
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



				<form class="well1 form-horizontal bga" action="" method="post"  id="contact_form">

					<input type="hidden" name="action" value="contact_us" />
					<input type="hidden" name="__vtrftk" value="sid:de69e9b563a3f1f3b9bf2daf7af7284d511ced4b,1488488815">
					<input type="hidden" name="publicid" value="6c0d70bf50ca06180efd5c913984ccb4">
					<input type="hidden" name="name" value="Website Contact Form">
					<input type="hidden" name="VTIGER_RECAPTCHA_PUBLIC_KEY" value="6LdRwBsTAAAAACdtmoN_2V32d6LHgV6hE1W_TwYA">
						<table>
							<?php if($error): ?>
								<div class="alert alert-danger" role="alert" id="error_message" style="text-align: center;"><?php echo $error; ?></div>
							<?php endif; ?>

							<?php if($message): $_POST = array(); ?>
								<div class="alert alert-success" role="alert" style="text-align: center;"><?php echo $message; ?></div>
							<?php endif; ?>

					<div class="form-group">
						<label class="col-md-3 control-label">First Name</label>
						<div class="col-md-8 inputGroupContainer">
							<div class="input-group">
								<input  name="first_name" data-validation="required" class="form-control"  type="text" value="<?php echo $_POST['first_name']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" >Last Name</label>
						<div class="col-md-8 inputGroupContainer">
							<div class="input-group">
								<input name="last_name"  class="form-control"  type="text" value="<?php echo $_POST['last_name']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Email Address</label>
						<div class="col-md-8 inputGroupContainer">
							<div class="input-group">
								<input name="email"  class="form-control"  type="text" value="<?php echo $_POST['email']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Phone </label>
						<div class="col-md-8 inputGroupContainer">
							<div class="input-group">
								<input name="phone"  class="form-control" type="text" value="<?php echo $_POST['phone']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Company Size</label>
						<div class="col-md-8 selectContainer">
							<div class="input-group">
								<select name="state" class="form-control selectpicker" >
									<option value="" >- Select a value -</option>
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
						<label class="col-md-3 control-label">Let us know how we can help  </label>
						<div class="col-md-8 selectContainer">
							<div class="input-group">
								<textarea class="js-text-full text-full form-textarea"  name="wecan_help" rows="5" cols="60" placeholder=""><?php echo $_POST['wecan_help']; ?></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3"></label>
						<div class="col-md-8 selectContainer">
							<div class="input-group">
								<div class="g-recaptcha" name="recaptcha" data-validation="required" data-sitekey="6LcIOBwUAAAAAF7wELD07sj2wVsCmFRvSXbpJ2zY"></div>
								<input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
							</div>
						</div>
					</div>

					<!-- radio checks -->
					<div class="form-group"></div>

					<div class="form-group">
							 <div class="col-md-3"></div>
						<div class="col-md-8 submitbtnn">

							<button type="submit" name="contact-submit" class="btn btn-warning btn-block indexSubmit" >submit </button>

						</div>
					</div>
				</form>
 <!--js for captcha-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
			</div>

		</div>
	</section>



	<div class="clearfix"></div>



	<?php include("footer.php"); ?>
	<script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>

	</body>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#contact_form").validate({
				rules: {

					first_name: {
						required: true,
						minlength: 2,

					},
					last_name: {
						required: true,
						minlength: 2
					},
					phone: {
						required: true,
						digits: true,
						minlength: 10
					},


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

					first_name: {
						required: "Please enter first name",
						minlength: "Name should be at least 2 Char"
							},
					last_name: {
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

					hiddenRecaptcha: {
						required: "Please click on the reCAPTCHA box"
					},


				}
			});
		});

	</script>
</html>
