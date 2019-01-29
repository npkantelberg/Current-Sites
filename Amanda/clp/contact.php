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

  <body class="contact-page">

    <?php include('menu.php'); ?>

    <section class="contact-section">
      <div class="contact-logo">
        <img class="logo" src="/images/contact.png" alt="">
      </div>
      <div class="contact-wrapper">
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
      </div>
    </section>

		<?php
		include_once('footer.php');
		?>
<?php
}
?>
</html>
