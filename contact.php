<!DOCTYPE html>
<html lang="en">
<?php if(isset($_POST[ 'email'])) { // EDIT THE 2 LINES BELOW AS REQUIRED // $email_to="vinay@venturecentre.in" ; $email_to="rohitpatil2137@gmail.com" ; $email_subject="Co-working Space Enquiry" ; $name=$ _POST[ 'name']; // required $email=$ _POST[ 'email']; // required $contact=$ _POST[ 'mobile']; //required $location=$ _POST[ 'message']; //required $error_message="error" ; //For Name $string_exp="/^[A-Za-z .'-]+$/" ; if(!preg_match($string_exp,$name)) { $error_message .='The Name you entered does not appear to be valid.<br />' ; } // for Email $email_exp='/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/' ; if(!preg_match($email_exp,$email)) { $error_message .='The Email Address you entered does not appear to be valid.<br />' ; } // for phoneno $mobile_exp='/^[7-9]{1}[0-9]{9}$/i' ; if(!preg_match($mobile_exp,$contact)) { $error_message .='The Mobile no you have entered does not appear to be valid.<br />' ; } //For Message $string_exp="/^[A-Za-z 0-9._%-]+$/" ; if(!preg_match($string_exp,$location)) { $error_message .='The message you entered does not appear to be valid.<br />' ; } // for message function clean_string($string) { $bad=a rray( "content-type", "bcc:", "to:", "cc:", "href"); return str_replace($bad, "",$string); } // $email_message .="name: " .clean_string($name). "\n"; $email_message .="email: " .clean_string($email). "\n"; $email_message .="mobile: " .clean_string($contact). "\n"; $email_message .="Message: " .clean_string($location). "\n"; // create email headers $headers='From: ' .$email. "\r\n". 'Reply-To: '.$email. "\r\n" . 'X-Mailer: PHP/' . phpversion(); //@mail($email_to, $email_subject, $email_message, $headers); ?>
<?php if(@!mail($email_to, $email_subject, $email_message, $headers)){ echo "Message not sent"; echo "$email_message"; }else{ echo "Successfully sent"; } } ?>

<head>
	<meta charset="utf-8">
	<title>VCN Coworking Space Baner | Corporate Office Space | Pune</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="keywords" content="VCN coworking space, best co-working space in Pune, budgeted shared office space pune, Plug and play, business centre baner, office space on monthly sharing basis in pune, shared office on rent in pune, Affordable office for startups in pune, premium co-working space in baner" />
	<meta name="description" content="Best Coworking space in Baner Pune, Affordable shared office space, premium corporate office space for startups,
conference rooms and private cabins, shared Office on monthly basis, Low Budget Coworking Space in Baner">
	<meta name="author" content="VCN Coworking">
	<!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
	<link href="img/favicon.png" rel="shortcut icon">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS File -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Libraries CSS Files -->
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/animate-css/animate.min.css" rel="stylesheet">
	<!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">
	<!-- Visit now pop up responsive code -->
	<link href="css/popup.css" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
	<!--<meta name="description" content=""> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="assets1/css/bootstrap.min.css">
	<!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
	<!--For Plugins external css-->
	<link rel="stylesheet" href="assets1/css/plugins.css" />
	<link rel="stylesheet" href="assets1/css/roboto-webfont.css" />
	<!--Theme custom css -->
	<link rel="stylesheet" href="assets1/css/style.css">
	<!--Theme Responsive css-->
	<link rel="stylesheet" href="assets1/css/responsive.css" />
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119388570-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-119388570-1');
	</script>
	<!-- End of google analytics tracking code-->
	<style>
		*{
		font-family: 'Roboto', sans-serif;
		}
	</style>
</head>

<body>
	<div id="preloader"></div>
	<!--==========================

  Header Section

============================-->
	<header id="header">
		<div class="container">
			<div id="logo" class="pull-left">
				<a href="index.php">
					<img src="img/logo_vcn.png" alt="VCN Coworking" title="" /></img>
				</a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="index.php">Home</a>
					</li>
					<li><a href="index.php">About Us</a>
					</li>
					<li><a href="amenities.php">Amenities</a>
					</li>
					<li><a href="https://venturecentre.in/blog">Blog</a>
					</li>
					<!-- <li><a href="baner.php">Gallery</a></li>-->
					<li><a href="locations.php">Pricing</a>
						<li class="menu-active"><a href="Contact.php">Contact Us</a>
						</li>
				</ul>
			</nav>
			<!-- #nav-menu-container -->
		</div>
	</header>
	<!-- #header -->
	<!--==========================

  Contact Section

============================-->
	<section id="contact">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-md-12">
					<h1 class="section-title">Coworking Requiremnts</h1>
					<div class="section-title-divider"></div>
					<p class="section-description">Feel free to drop us a line..</p>
					<br>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-2">
					<div class="info">
						<div> <i class="fa fa-map-marker"></i>
							<p>Venture Centre Network (VCN Co-working Space)
								<br>
								<br><strong>Baner <br> Location 1:</strong>
								<br>401/402, Sneh Symphony,
								<br>Nr Balewadi High St,
								<br><strong>Location 2:</strong> 
								<br>301/302/303, Avenue Imperia,
								<br>Above Fab-India,
								<br>Main Baner Road,
								<br>Pune - 411045.
								<br>
								<br><strong>D P Road :</strong>
								<br>14, Siddharth Court, Dhole Patil Road,
								<br>Pune - 411001 (INDIA).</p>
							<br>
						</div>
						<div> <i class="fa fa-envelope"></i>
							<p>contact@venturecentre.in</p>
						</div>
						<div> <i class="fa fa-phone"></i>
							<p>+91- 8983 112200 / 7588 991100</p>
						</div>
						<br>
						<br>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.0535914087886!2d73.76871551475308!3d18.57162248737922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b94a8150e563%3A0x5607a21d025c4555!2sVCN%20Co-working%20Space!5e0!3m2!1sen!2sin!4v1572692238027!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="col-md-5 col-md-push-2">
					<div class="form">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="mobile" class="form-control" name="mobile" id="mobile" required="required" placeholder="Mobile No" data-rule="minlen:10" data-msg="Please enter at least 10 digits" />
								<!--
					<input name="phoneno" required="required" placeholder="Enter Mobiphonenole No"/>
					
					-->
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea type="text" name="message" class="form-control" id="message" placeholder="Your Requirements" rows="5" data-msg="Please enter your message" /></textarea>
							

								<div class="validation"></div>
							</div>
							<div class="text-center">
								<button type="submit">Send Requirements</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==========================

  Footer

============================-->
	<footer id="footer">
		<div class="container">
			<div>
				<br>
				<a href="https://www.facebook.com/vcncoworking/" target="_blank">
					<img src="img/fb.png" alt="coworking.fb">
					<a href="https://www.linkedin.com/company/vcncoworking" target="_blank">
						<img src="img/linkedin.png" alt="coworking.LIn">
						<a href="https://twitter.com/VCNcoworking" target="_blank">
							<img src="img/twitter.png" alt="coworking.Tr">
							<a href="https://www.instagram.com/vcn.coworking.space/" target="_blank">
								<img src="img/instagram.png" alt="coworking.Ig">
								</br>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="copyright">&copy;2019 Copyright VCN. All Rights Reserved</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- #footer --> <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	<!-- Required JavaScript Libraries -->
	<script src="lib/morphext/morphext.min.js"></script> <!--for chmaging -->
		<script src="lib/stickyjs/sticky.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/superfish/superfish.min.js"></script>
	
	<!-- Template Specisifc Custom Javascript File -->
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
	<script src="assets1/js/plugins.js"></script>
</body>

</html>
