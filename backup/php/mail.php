<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "npkantelberg@gmail.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	$error = "";

	if(empty($_POST["name"]) and empty($_POST["email"]) and empty($_POST["message"])){
		showPage();
		exit();
	}
	else if(empty($_POST["name"])){
		$error = "Please enter name.";
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