<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
<title>Repbox CRM</title>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="google-signin-client_id" content="626559598465-rin0ehqkuuepc8ioehi7n52h4se490qr.apps.googleusercontent.com">

<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="favicon.ico">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
<!-- Global CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/mailform.css">
<!-- Plugins CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
<link href="https://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">
<!-- Theme CSS -->
<link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]-->
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!--[endif]-->

<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<!--Start of Zendesk Chat Script-->

<!--End of Zendesk Chat Script-->
<!--End of Zendesk Chat Script-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<!-- Fancy-Box -->
<link rel="stylesheet" type="text/css" href="fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen"/>

</head>

<body class="home-page">
<!-- ******HEADER****** -->
<header id="header" class="header navbar-fixed-top">
  <div class="container">
    <h1 class="logo"> <a href="index.html"><span class="text"><img class="header-logo" src="assets/img/logo.png"> <img class="header-top" src="assets/img/logo.png"></span></a> </h1>
    <!--//logo-->
    <nav class="main-nav navbar-right" role="navigation">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <!--//nav-toggle-->
      </div>
      <!--//navbar-header-->
      <div id="navbar-collapse" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
          <li class="nav-item"><a href="contact.html">Contact Us</a></li>
         <li class="nav-item"> <a href="support.html">Support</a></li>
         <li class="nav-item"> <a href="features.html">Features</a></li>
        </ul>
        <ul class="div-right">
          <li class="nav-item1"><a href=#><i class="fa fa-phone" aria-hidden="true"></i> 1.877.729.4269</a></li>
          <li class="nav-item2 nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="request-a-demo.html">Request a Demo</a></li>
        </ul>
        <!--//nav-->
      </div>
    <!--//main-nav-->
  </div>
  <!--//container-->
</header>
<!--//header-->


<div class="sections-wrapper box-hh2">

<div class="container cont2 heading_sect1">
<div class="mail_sent">
<?php
if(isset($_POST['contact-submit'])){
    $to = "dave@repbox.co, devlin@repbox.co, micah@repbox.co, tickets@repbox.co";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
   $phone = $_POST['phone'];
    $subject = "Demo Requested";
    $subject2 = "Copy of your form submission";
    $message = '<table>
		<tr><th>First Name</th><td>'.$first_name.'</td></tr>
		<tr><th>Email Address</th><td>'.$from.'</td></tr>
		<tr><th>Phone</th><td>'.$phone.'</td></tr>
		</table>';
    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: '.$first_name.'<'.$from.'>' . "\r\n";
    if(mail($to,$subject,$message,$headers)){
		echo "<p>Mail Sent. Thank you " . $first_name . ", we will contact you shortly.</p>";
	}else{
		echo "<p>Unable to Sent mail. please try again later.</p>";
	}
}
?>
</div>
</div>

</div>

  <div class="bottom-bar">
  <div class="container">
    <ul class="footer-social-icons icons-m">
      <li><a href="#"> <i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
      <li><a href="#"> <i class="fa fa-twitter"></i> </a> </li>
      <li><a href="#"> <i class="fa fa-facebook"></i> </a> </li>
    </ul>

    <!--//container-->
  </div>
  <!--//bottom-bar-->
</div>

<!-- Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="assets/js/fancybox.custom.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="lib/jquery.validate.min.js"></script>
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script src="lib/waitMe.min.js"></script>


</html>
