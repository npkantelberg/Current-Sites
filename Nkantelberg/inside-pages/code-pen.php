<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/custom-stylesV4.css">
	<link rel="stylesheet" type="text/css" href="/css/super-styles.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
	<script type="text/javascript" src="/js/bootstrap.js" ></script>
	<script type="text/javascript" src="/js/my-javascript" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<style>
html {
  box-sizing: border-box;
}
body {
  margin: 0;
}
*, *:before, *:after {
  box-sizing: inherit;
}

h1 {
  margin-top: 0;
}

</style>


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
	} else if(empty($_POST["message"])) {
		$error = "Pleae give some information.";
		showPage($error);
		exit();
	} else {
		$error = "Thank You!";
		$_SESSION["loggedin"] = TRUE;
		mail($recipient, $subject, $formcontent, $mailheader) or die($error);
		return showPage($error);
	}
	function showPage($error){
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/custom-stylesV4.css">
	<link rel="stylesheet" type="text/css" href="/css/super-styles.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
	<script type="text/javascript" src="/js/bootstrap.js" ></script>
	<script type="text/javascript" src="/js/my-javascript" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="/js/parallax.js"></script>

</head>
<?php
include_once('../php/menu.php');
?>

<div class="contact-wrapper">
	<section id="contact-section" class="contact-section">
		<div class="container-fluid contact-container">
			<div class="row contact-row">
				<div class="col-xs-12 email-form-box">
					<form action="" method="POST">
						<h2>I look forward to hearing from you!</h2>
				   		<div class="email-form-input fname-input">
				   			<p>First Name</p>
				   			<input type="text" name="fname">
				   		</div>

							<div class="email-form-input lname-input">
				   			<p>Last Name</p>
				   			<input type="text" name="lname">
				   		</div>

					    <div class="email-form-input email-input">
					    	<p>Email</p>
					    	<input name="email" type="text">
					    </div>

					    <div class="email-form-input message-input">
						    <p>Message</p>
						    <textarea name="message"></textarea>
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
</div>

<div class="footer-wrapper">
<?php
include_once('../php/footer.php');
?>
</div>
</html>


<?php
}
?>


</html>
