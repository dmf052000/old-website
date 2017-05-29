
<?php
	$title = "Repbox CRM";
	include("header.php");
?>
	<link id="theme-style" rel="stylesheet" href="assets/css/sign-up.css">
</head>


<body class="businessbuynow">

	<?php
		$header_logo = "assets/img/logo1.png";
		$header_top = "";
		include("menu.php");
		$message = $error = "";
		include("includes/Repbox.php");
	?>

	<div class="bg-slider-wrapper-con">
		<div class="flexslider2 bg-slider">
			<ul class="slides2">
				<li class="slide2 slide-2"></li>
			</ul>
		</div>
	</div>

	<section class="promo11 signup1 section section-on-bg">
		<div class="container text-center">

			<div class="cont5">
				<?php if(!$error && !$message): ?>
					<p>&nbsp;</p>
				<?php endif; ?>

				<h3>Welcome to RepBox CRM</h3>

				<p>Let's Get Started</p>


			</div>

			<div class="col-md-5 div-quote14">
				<?php if($error): ?>
					<div class="alert alert-danger" role="alert" id="error_message" style="text-align: center;margin-top:10px;"><?php echo $error; ?></div>
				<?php endif; ?>

				<?php if($message): $_POST = array(); ?>
					<div class="alert alert-success" role="alert" style="text-align: center;margin-top:10px;"><?php echo $message; ?></div>
				<?php endif; ?>
				<form class="well14 form-horizontal14" action="" method="POST"  id="contact_form">
					<input type="hidden" name="action" value="demo_signup" />
					<div class="form-group">
						<label class="col-md-5 control-label">Full Name</label>
						<div class="col-md-12 inputGroupContainer">
							<div class="input-group">
								<input  name="full_name" placeholder="Full Name"  class="form-control"  type="text" value="<?php echo $_POST['full_name']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-5 control-label">Email Address</label>
						<div class="col-md-12 inputGroupContainer">
							<div class="input-group">
								<input name="email" placeholder="Email Address" class="form-control"  type="text" value="<?php echo $_POST['email']; ?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-5 control-label">Phone Number</label>
						<div class="col-md-12 inputGroupContainer">
							<div class="input-group">
								<input name="phone" placeholder="Phone Number"  class="form-control" type="text" value="<?php echo $_POST['phone']; ?>">
							</div>
						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<div class="col-md-12">
							<button type="submit" name="contact-submit" class="btn btn-warning1" >submit </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<?php include("footer.php"); ?>





	<script type="text/javascript">
		$(document).ready(function() {
			$("#contact_form").validate({
				rules: {
					full_name: {
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
				},
				messages: {
					full_name: {
						required: "Please enter first name",
						minlength: "Name should be at least 2 Char"
					},
					phone: {
						required: "Please enter phone no",
						minlength: "Evening Phone should be 10 Digit"
					},
					email: "Please enter valid email address"
				}
			});
		});
	</script>
	</body>
</html>
