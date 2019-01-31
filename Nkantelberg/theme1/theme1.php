<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $formcontent="From: $fname $lname \n Message: $message";
  $recipient = "npkantelberg@gmail.com";
  $subject = "Contact Form";
  $mailheader = "From: $email \r\n";
  $error = "";

  if(empty($_POST["fname"]) and empty($_POST["email"]) and empty($_POST["message"]) and empty($_POST["lname"])){
    showPage($error);
    exit();
  } else if(empty($_POST["fname"])){
    $error = "Please enter first name.";
    showPage($error);
    exit();
  } else if(empty($_POST["lname"])){
    $error = "Please enter last name.";
    showPage($error);
    exit();
  } else if(empty($_POST["email"])) {
    $error = "Please enter your email.";
    showPage($error);
    exit();
  } else if(empty($_POST["message"])) {
    $error = "Please give some information.";
    showPage($error);
    exit();
  } else {
    $error = "Thank You!";
    mail($recipient, $subject, $formcontent, $mailheader) or die($error);
    return showPage($error);
  }
  function showPage($error){
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://nkantelberg.com/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="http://nkantelberg.com/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://nkantelberg.com/css/Theme1/theme1.css">
	<script
		src="https://code.jquery.com/jquery-3.1.1.js"
		integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
		crossorigin="anonymous">
	</script>
</head>
<title>
	Volunteer
</title>
<section class="nav-section nav">
	<div class="container-fluid jumbotron-box">
		<div class="row jumbotron-row">
			<div class="col-xs-12 noPad">
				<div class="full-screen-jumbo">
					<img src="http://nkantelberg.com/images/sunset2.jpg" />
				</div>
				<div class="container-fluid jumbotron-head-container">
					<div class="row jumbotron-head-row">
						<div class="col-xs-12 col-sm-4 jumbotron-logo">
							<img src="http://nkantelberg.com/images/logo.png" />
						</div>
						<div class="col-xs-12 col-sm-8 jumbotron-head-text">
							<p>Fox Valley Volunteer</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid jumbotron-buttons-container">
				<div class="row jumbotron-buttons-row">
					<div class="col-xs-12 col-sm-6 jumbotron-button projects-btn">
						<a class="projects" href="#"><span>Projects</span></a>
					</div>
					<div class="col-xs-12 col-sm-6 jumbotron-button contact-btn">
						<a class="contact" href="#"><span>Contact</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<body>
<section class="jumbotron-buttons-section">
	<div class="container-fluid jumbotron-buttons-container">
		<div class="row jumbotron-buttons-row">
			<div class="col-xs-12 col-sm-6 jumbotron-button projects-btn">
				<a class="projects" href="#"><span>Projects</span></a>
			</div>
			<div class="col-xs-12 col-sm-6 jumbotron-button contact-btn">
				<a class="contact" href="#"><span>Contact</span></a>
			</div>
		</div>
	</div>
</section>
<section class="cta-section">
	<div class="container-fluid cta-container">
		<div class="row projects-row">
			<div class="col-xs-12 col-sm-4 safari-sm-4 cta">
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>Call To Action</h3>
										<p>Short Content<a href="#">Short Content</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 safari-sm-4 cta">
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h3>Call To Action</h3>
										<p>Short Content<a href="#">Short Content</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 safari-sm-4 cta">
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h3>Call To Action</h3>
										<p>Short Content<a href="#">Short Content</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="section volunteer-section">
	<div class="container-fluid volunteer-container">
		<div class="row volunteer-row">
			<div class="col-xs-12 noPad col-sm-12 col-md-6 col-md-push-6 projects-text-container">
				<h2>Volunteer</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at aliquet urna. Ut sed enim neque. Fusce vitae tellus vestibulum turpis vehicula luctus in at nulla. Pellentesque sollicitudin euismod justo, a commodo nisl mattis faucibus. Cras eu malesuada nulla. Pellentesque commodo scelerisque consectetur. Ut tempus tempus augue ac pharetra. Donec semper metus id risus mattis, et gravida ligula consequat. Mauris nisl nunc, commodo nec augue quis, porttitor mollis ipsum. Vivamus in fringilla purus. Sed rhoncus faucibus vestibulum. Vivamus convallis tortor non turpis pellentesque blandit. Praesent vel venenatis nibh.
				</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6 noPad">
				<div class="volunteer-img-contaier">
					<img src="http://nkantelberg.com/images/earth.png">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="projects-section">
	<div class="projects-container">
		<div class="projects-row">
			<div class="project-box project-box1">
				<a href="#">
					<div class="project-box-info">
						<p>Project Title</p>
					</div>
				</a>
			</div>
			<div class="project-box project-box2">
				<a href="#">
					<div class="project-box-info">
						<p>Project Title</p>
					</div>
				</a>
			</div>
			<div class="project-box project-box3">
				<a href="#">
					<div class="project-box-info">
						<p>Project Title</p>
					</div>
				</a>
			</div>
			<div class="project-box project-box4">
				<a href="#">
					<div class="project-box-info">
						<p>Project Title</p>
					</div>
				</a>
			</div>
			<div class="project-box project-box5">
				<a href="#">
					<div class="project-box-info">
						<p>Project Title</p>
					</div>
				</a>
			</div>
			<div class="project-box project-box6">
				<a href="#">
					<div class="project-box-info">
						<p>Project Title</p>
					</div>
				</a>
			</div>
			<div class="project-box project-box7">
				<a href="#">
					<div class="project-box-info">
						<p>Project Title</p>
					</div>
				</a>
			</div>
			<div class="project-box project-box8">
				<a href="#">
					<div class="project-box-info">
						<p>Project Title</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<section id="contact-section" class="contact-section">
	<div class="container-fluid contact-container">
		<div class="row contact-row">
			<div class="col-xs-12 email-form-box">
				<form action="" method="POST">
					<h2>I look forward to hearing from you!</h2>
						<div class="email-form-input fname-input">
							<p>First Name</p>
							<input class="text-element" type="text" name="fname">
						</div>
						<div class="email-form-input lname-input">
							<p>Last Name</p>
							<input class="text-element" type="text" name="lname">
						</div>
						<div class="email-form-input email-input">
							<p>Email</p>
							<input class="text-element" name="email" type="text">
						</div>
						<div class="email-form-input message-input">
							<p>Message</p>
							<textarea class="text-element" name="message"></textarea>
						</div>
						<div class="email-form-btn submit-btn">
							<input id="submit" name="submit" type="submit">
						</div>
						<div class="email-form-btn reset-btn">
							<input type="reset" value="Clear">
						</div>
						<p><?php echo $error; ?></p>
					</form>
			</div>
		</div>
	</div>
</section>
</body>
<section class="footer-section">
	<div class="container-fluid footer-container">
		<div class="row footer-row">
			<div class="col-xs-12 col-sm-6 col-sm-push-6">
				<div class="row social-icons-row">
					<div class="col-xs-12 social-col">
						<div class="social-boxs">
							<div class="social-box facebook-box">
								<a href="http://www.facebook.com"><img src="http://nkantelberg.com/images/facebook-big.jpg"></a>
							</div>
							<div class="social-box twitter-box">
								<a href="http://www.twitter.com"><img src="http://nkantelberg.com/images/twitter-big.jpg"></a>
							</div>
							<div class="social-box youtube-box">
								<a href="http://www.youtube.com"><img src="http://nkantelberg.com/images/youtube-big.jpg"></a>
							</div>
							<div class="social-box instagram-box">
								<a href="http://www.instagram.com"><img src="http://nkantelberg.com/images/instagram-big.jpg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-sm-pull-6 copyright-box">
				<p>Copyright Nick Kantelberg &#9400; | Created by Nick Kantelberg</p>
			</div>
		</div>
	</div>
</section>

<script>
	$(".contact").click(function() {
		$('html,body').animate({
	    	scrollTop: $(".contact-section").offset().top},
	    	'slow');
	});

	$(".projects").click(function() {
	    $('html,body').animate({
	        scrollTop: $(".projects-section").offset().top},
	        'slow');
	});
</script>

</html>
<?php
	}
?>
