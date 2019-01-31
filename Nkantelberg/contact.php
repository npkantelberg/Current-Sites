<?php
include_once('php/menu.php');
?>
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
<!--
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
-->

<div class="contact-wrapper">
  <div class="page-wrapper">
    <div class="contact-wrapper">
      <div class="face-container">
        <div class="face-box">
          <div class="eye head">
            <img src="http://nkantelberg.com/images/mouse-eye.png" alt="">
          </div>
          <div class="eye head">
            <img src="http://nkantelberg.com/images/mouse-eye.png" alt="">
          </div>
          <div class="face head">
            <img src="http://nkantelberg.com/images/mouse.png" alt="">
          </div>
        </div>
      </div>

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

    </div>
  </div>
</div>
<script>

$(".text-element").on("focusout", function(){
	$(".face-box").removeClass("open-eye");
})

$(".text-element").on("focus", function(){
	$(".text-element").removeClass("text-active");
	$(this).addClass("text-active");
	$(".face-box").addClass("open-eye");

	document.querySelector(".text-active").addEventListener("keydown", function(){
      var myElement = document.querySelector('.text-active');
      var startPosition = myElement.selectionStart;
      var endPosition = myElement.selectionEnd;
      // Check what the value of rotation is. if rotation is greater than 25deg or less than -25deg dont add to it
			if((-startPosition+25) > 25 || (-startPosition+25) < -25){
				// dont add to the rotation value
			} else {
				// add to the rotation value
				var rotate = "rotate("+(-startPosition+25)+"deg)";
			}
			// adjust the rotation style to turn the eyes
			$(".eye").css("transform", rotate);
  },false);

});

</script>
<div class="footer-wrapper">
<?php
include_once('php/footer.php');
?>
</div>
<?php
}
?>
