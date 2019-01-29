<?php
include('header.php');
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/amanda/amanda.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Amanda Lea Photography</title>
  </head>

  <body class="about-page">

    <?php include('menu.php'); ?>

    <section class="about-section">
      <div id="about-wrapper" class="about-wrapper">
        <div class="about-header">
          <img src="/images/About/about-header.jpg" alt="About header">
        </div>
        <div class="about-content-left">
          <div class="about-content-image">
            <img src="/images/About/amanda.jpg" alt="Photo of Amanda">
          </div>
        </div>
        <div class="about-content">
          <h2>About Amanda Lea</h2>
          <p>Welcome to Amanda Lea Photography! &nbsp;
          ​I hope you enjoy looking through the photos as much as I enjoy taking them. I recently graduated from UW-Green Bay with a Bachelors in Business Administration and a minor in Studio Arts-Photography.  In addition to my own work, I've also done studio photography in Appleton, WI. I love meeting new people, and each person I photograph is a new story I am able to tell. Just let me know what you want your story to be!</p>
        </div>

        <div class="about-content">
          <h2>My Work</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eleifend vitae ante a fermentum. Cras fermentum mauris vel egestas condimentum. Quisque facilisis erat nec consectetur ultricies. Vestibulum pretium ante in mauris tincidunt, vitae rhoncus ante dapibus. Sed aliquet sit amet mauris et ultricies. Curabitur lectus massa, aliquam venenatis tempor id, tempor vel nisl. Morbi dignissim auctor mauris. Aliquam erat volutpat. Ut accumsan lectus egestas velit posuere aliquet. Nunc egestas cursus volutpat. Duis ac augue eu leo scelerisque gravida eu nec nisl. Proin sed condimentum elit.</p>
        </div>
        <div class="about-content-right">
          <div class="about-content-image">
            <img src="/images/About/my-work.jpg" alt="Photo of Amanda">
          </div>
        </div>
          </section>
        </div>
        <div class="about-ctas">
          <div class="about-cta"></div>
          <div class="about-cta"></div>
        </div>
      </div>
    </section>
		<?php
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$phone = $_POST['phone'];
			$formcontent="From: $fname $lname \n Message: $message";
			$recipient = "npkantelberg@gmail.com";
			$subject = "Contact Form";
			$mailheader = "From: $email \r\n";
			$error = "";

			if(empty($_POST["fname"]) and empty($_POST["email"]) and empty($_POST["message"]) and empty($_POST["lname"])){
				showPage();
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
				$error = "Pleae enter your email.";
				showPage($error);
				exit();
			} else if(empty($_POST["phone"])) {
				$error = "Pleae enter your phone.";
				showPage($error);
				exit();
			} else if(empty($_POST["message"])) {
				$error = "Pleae give some information.";
				showPage($error);
				exit();
			} else {
				$error = "Thank You!";
				mail($recipient, $subject, $formcontent, $mailheader) or die($error);
				return showPage($error);
			}
			function showPage(){
		?>
		<section class="contact-section">
			<div class="contact-logo">
				<img class="logo" src="images/contact.png" alt="">
			</div>

			<div class="contact-wrapper">
				<h2 style="text-align:center;">Coming Soon</h2>
				<?/*
				<form action="" method="POST">
					<div class="input-wrapper">
						<div class="email-form-input fname-input">
							<input class="input-box" placeholder="First Name" type="text" name="fname">
						</div>
						<div class="email-form-input lname-input">
							<input class="input-box" placeholder="Last Name" type="text" name="lname">
						</div>
						<div class="email-form-input phone-input">
							<input class="input-box" placeholder="Phone Number" name="phone" type="text">
						</div>
						<div class="email-form-input email-input">
							<input class="input-box" placeholder="Email" name="email" type="text">
						</div>
					</div>
					<div class="input-wrapper">
						<div class="email-form-input message-input">
							<textarea class="input-box" placeholder="Send me a message" name="message"></textarea>
						</div>
					</div>
					<div class="email-form-btn submit-btn">
						<input value="Submit" class="submit" id="submit" name="submit" type="submit">
					</div>
					<!--
					<div class="email-form-btn reset-btn">
						<input type="reset" value="Clear">
					</div>
				-->
					<p><?php echo $error; ?></p>
				</form>
				*/?>
			</div>

			<div class="cal-wrapper">
				<iframe src="https://calendar.google.com/calendar/embed?src=amandaleaphotograph%40gmail.com&ctz=America%2FChicago" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div>

		</section>

		<?php
		include('footer.php');
		?>

<?php
}
?>
