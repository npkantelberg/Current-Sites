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
.test-active .test-menu{
  width: 100%;
  position: fixed;
  top: 0;
}
.test-header{
  height: 300px;
}
.test-menu{
  color: #fff;
  background: #333;
}
.test-content{
  max-width: 1200px;
  background: #666;
  color: #fff;
  margin: 0 auto;
  padding: 15px;
  font-size: 24px;
	overflow: hidden;
}
.test-menu ul{
  list-style-type: none;
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 0;
}
.test-menu ul li{
  display: inline-block;
  padding: 15px 0;
  flex: 1;
  text-align: center;
}
.image-left{
	float: left;
	margin-right: 10px;
	max-width: 450px;
	width: 100%;
}
.image-right{
	float: right;
	margin-left: 10px;
	max-width: 450px;
	width: 100%;
}
.image-left {
	float:left;
	margin-right:20px;
}
.image-right {
	float:right;
	margin-left:20px;
}
.float-image {
	opacity:0;
	transition:all .5s;
}
.float-image.image-left {
	transform:translateX(-30%) scale(0.95);
}
.float-image.image-right {
	transform:translateX(30%) scale(0.95);
}
.float-image.active {
	opacity:1;
	transform:translateX(0%) scale(1);
}


/* Form Follower */
.face-container{
	margin-left: 100px;
	text-align: center;
	margin-top: 50px;
}
.face-box{
	position: relative;
	display: inline-block;
}
.eye{
	transform: rotate(25deg);
	transition: .1s all;
	display: inline-block;
}
.eye:nth-child(1){
	position: absolute;
	top: 45px;
	left: 110px;
}
.eye:nth-child(2){
	position: absolute;
	top: 45px;
	left: 50px;
}
.head{
	opacity: 0;
}
.head.open-eye{
	opacity: 100;
}
.contact-wrapper .contact-section{
	width: 400px;
	margin-top: -50px;
	z-index: 100;
	position: absolute;
	left: 400px;
	right: 0;
	background: #222;
}
.face-container{
	z-index: 10;
}

.test-header svg{
	max-width: 380px;
}

.stroke {
  stroke-dasharray: 1000;
  stroke-dashoffset: 1000;
  animation: dash 10s linear forwards;
}

@keyframes dash {
  to {
    stroke-dashoffset: 0;
  }
}

/*
body {
  font-family: 'bebas', sans-serif;
  background-color: #fff;
}
body .textcontainer {
  padding: 40px 0;
  text-align: center;
}
body .particletext {
  text-align: center;
  font-size: 48px;
  position: relative;
}
body .particletext.bubbles > .particle {
  opacity: 0;
  position: absolute;
  background-color: #fff;
  -webkit-animation: bubbles 4.5s ease-in infinite;
          animation: bubbles 4.5s ease-in infinite;
  border-radius: 100%;
}
.particletext.bubbles{
	display: block;
	width: 100%;
	height: 100%;
}
.bubbles img{
	width: 100%;
}

@-webkit-keyframes bubbles {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 1;
    -webkit-transform: translate(0, -20%);
            transform: translate(0, -20%);
  }
  100% {
    opacity: 0;
    -webkit-transform: translate(0, -1000%);
            transform: translate(0, -1000%);
  }
}

@keyframes bubbles {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20%);
            transform: translateY(-20%);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(-1500%);
            transform: translateY(-1500%);
  }
}
*/

</style>

<body>

<div class="test-header">


</div>

<div class="test-menu">
  <ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <li>Item 4</li>
    <li>Item 5</li>
  </ul>
</div>


<!--<div class="textcontainer">
	 <span class="particletext bubbles">
		<img src="testing-images/city-night.jpg" alt="">

	 </span>
</div>-->

<div class="test-content">
  <span>Lorem ipsum dolor amet seitan chambray kombucha cliche hammock. Hammock pug try-hard lomo health goth. Put a bird on it pitchfork letterpress, franzen four loko activated charcoal crucifix everyday carry. Health goth keytar cred 8-bit bicycle rights selvage. Vexillologist brunch iPhone snackwave fixie ennui knausgaard small batch brooklyn.</span>
	<br /><br />
  <span>Raclette deep v neutra cray, tattooed gentrify fingerstache cloud bread la croix semiotics leggings cronut salvia whatever. Fashion axe pok pok fanny pack, 3 wolf moon letterpress hella jean shorts single-origin coffee glossier. Meditation cornhole bespoke affogato, mlkshk brunch next level. XOXO microdosing woke, blog mlkshk artisan glossier flannel DIY twee tumeric. Freegan williamsburg hashtag sustainable. Paleo chicharrones post-ironic seitan truffaut taxidermy PBR&B portland pitchfork taiyaki celiac lyft 8-bit viral.</span>
<br /><br />
  <span>Hammock XOXO lumbersexual health goth celiac. Try-hard kogi austin distillery copper mug iceland 3 wolf moon. Heirloom vice PBR&B, tofu chillwave YOLO photo booth raclette disrupt biodiesel sustainable snackwave synth. Knausgaard cardigan hexagon chicharrones normcore. Williamsburg pork belly small batch seitan everyday carry, hoodie paleo chicharrones.</span>
<br /><br />
  <span>Mlkshk quinoa gluten-free 8-bit cloud bread locavore. Tacos poke etsy stumptown whatever. Actually irony aesthetic unicorn tilde VHS 90's beard. Polaroid activated charcoal narwhal pitchfork master cleanse keytar fixie quinoa banjo keffiyeh ethical intelligentsia. Aesthetic master cleanse hell of blue bottle tumblr marfa glossier.</span>
<br /><br />
  <span>8-bit asymmetrical tacos chillwave edison bulb, photo booth offal typewriter man bun lo-fi wayfarers. Sriracha hella jean shorts heirloom. Austin keytar chartreuse glossier, taxidermy tbh biodiesel chillwave quinoa viral blue bottle tofu disrupt. Four loko plaid chillwave godard, cronut single-origin coffee art party wolf shaman keytar pork belly cloud bread. Skateboard lo-fi mustache fingerstache, readymade woke pok pok 3 wolf moon yr meditation microdosing banh mi heirloom enamel pin. Tbh mumblecore you probably haven't heard of them tumeric chicharrones, sartorial poke woke echo park austin master cleanse wolf pitchfork.</span>
	<img class="float-image image-left" src="testing-images/Kia-Air-Filter.jpg" alt="">
  <span>Lorem ipsum dolor amet seitan chambray kombucha cliche hammock. Hammock pug try-hard lomo health goth. Put a bird on it pitchfork letterpress, franzen four loko activated charcoal crucifix everyday carry. Health goth keytar cred 8-bit bicycle rights selvage. Vexillologist brunch iPhone snackwave fixie ennui knausgaard small batch brooklyn.</span>
<br /><br />
  <span>Raclette deep v neutra cray, tattooed gentrify fingerstache cloud bread la croix semiotics leggings cronut salvia whatever. Fashion axe pok pok fanny pack, 3 wolf moon letterpress hella jean shorts single-origin coffee glossier. Meditation cornhole bespoke affogato, mlkshk brunch next level. XOXO microdosing woke, blog mlkshk artisan glossier flannel DIY twee tumeric. Freegan williamsburg hashtag sustainable. Paleo chicharrones post-ironic seitan truffaut taxidermy PBR&B portland pitchfork taiyaki celiac lyft 8-bit viral.</span>
<br /><br />
  <span>Hammock XOXO lumbersexual health goth celiac. Try-hard kogi austin distillery copper mug iceland 3 wolf moon. Heirloom vice PBR&B, tofu chillwave YOLO photo booth raclette disrupt biodiesel sustainable snackwave synth. Knausgaard cardigan hexagon chicharrones normcore. Williamsburg pork belly small batch seitan everyday carry, hoodie paleo chicharrones.</span>
	<img class="float-image image-right" src="testing-images/Kia-Air-Filter.jpg" alt="">
  <span>Mlkshk quinoa gluten-free 8-bit cloud bread locavore. Tacos poke etsy stumptown whatever. Actually irony aesthetic unicorn tilde VHS 90's beard. Polaroid activated charcoal narwhal pitchfork master cleanse keytar fixie quinoa banjo keffiyeh ethical intelligentsia. Aesthetic master cleanse hell of blue bottle tumblr marfa glossier.</span>
	<img class="float-image image-left" src="testing-images/Kia-Air-Filter.jpg" alt="">
  <span>8-bit asymmetrical tacos chillwave edison bulb, photo booth offal typewriter man bun lo-fi wayfarers. Sriracha hella jean shorts heirloom. Austin keytar chartreuse glossier, taxidermy tbh biodiesel chillwave quinoa viral blue bottle tofu disrupt. Four loko plaid chillwave godard, cronut single-origin coffee art party wolf shaman keytar pork belly cloud bread. Skateboard lo-fi mustache fingerstache, readymade woke pok pok 3 wolf moon yr meditation microdosing banh mi heirloom enamel pin. Tbh mumblecore you probably haven't heard of them tumeric chicharrones, sartorial poke woke echo park austin master cleanse wolf pitchfork.</span>

	<span>Raclette deep v neutra cray, tattooed gentrify fingerstache cloud bread la croix semiotics leggings cronut salvia whatever. Fashion axe pok pok fanny pack, 3 wolf moon letterpress hella jean shorts single-origin coffee glossier. Meditation cornhole bespoke affogato, mlkshk brunch next level. XOXO microdosing woke, blog mlkshk artisan glossier flannel DIY twee tumeric. Freegan williamsburg hashtag sustainable. Paleo chicharrones post-ironic seitan truffaut taxidermy PBR&B portland pitchfork taiyaki celiac lyft 8-bit viral.</span>
<br /><br />
<span>Raclette deep v neutra cray, tattooed gentrify fingerstache cloud bread la croix semiotics leggings cronut salvia whatever. Fashion axe pok pok fanny pack, 3 wolf moon letterpress hella jean shorts single-origin coffee glossier. Meditation cornhole bespoke affogato, mlkshk brunch next level. XOXO microdosing woke, blog mlkshk artisan glossier flannel DIY twee tumeric. Freegan williamsburg hashtag sustainable. Paleo chicharrones post-ironic seitan truffaut taxidermy PBR&B portland pitchfork taiyaki celiac lyft 8-bit viral.</span>
<img class="float-image image-right" src="testing-images/Kia-Air-Filter.jpg" alt="">
<span>Raclette deep v neutra cray, tattooed gentrify fingerstache cloud bread la croix semiotics leggings cronut salvia whatever. Fashion axe pok pok fanny pack, 3 wolf moon letterpress hella jean shorts single-origin coffee glossier. Meditation cornhole bespoke affogato, mlkshk brunch next level. XOXO microdosing woke, blog mlkshk artisan glossier flannel DIY twee tumeric. Freegan williamsburg hashtag sustainable. Paleo chicharrones post-ironic seitan truffaut taxidermy PBR&B portland pitchfork taiyaki celiac lyft 8-bit viral.</span>
<br /><br />
<span>Raclette deep v neutra cray, tattooed gentrify fingerstache cloud bread la croix semiotics leggings cronut salvia whatever. Fashion axe pok pok fanny pack, 3 wolf moon letterpress hella jean shorts single-origin coffee glossier. Meditation cornhole bespoke affogato, mlkshk brunch next level. XOXO microdosing woke, blog mlkshk artisan glossier flannel DIY twee tumeric. Freegan williamsburg hashtag sustainable. Paleo chicharrones post-ironic seitan truffaut taxidermy PBR&B portland pitchfork taiyaki celiac lyft 8-bit viral.</span>
<br /><br />
<span>Raclette deep v neutra cray, tattooed gentrify fingerstache cloud bread la croix semiotics leggings cronut salvia whatever. Fashion axe pok pok fanny pack, 3 wolf moon letterpress hella jean shorts single-origin coffee glossier. Meditation cornhole bespoke affogato, mlkshk brunch next level. XOXO microdosing woke, blog mlkshk artisan glossier flannel DIY twee tumeric. Freegan williamsburg hashtag sustainable. Paleo chicharrones post-ironic seitan truffaut taxidermy PBR&B portland pitchfork taiyaki celiac lyft 8-bit viral.</span>
<br /><br />
</div>


<div class="contact-wrapper">
	<div class="face-container">
		<div class="face-box">
			<div class="eye head">
				<img src="/images/eye.png" alt="">
			</div>
			<div class="eye head">
				<img src="/images/eye.png" alt="">
			</div>
			<div class="face head">
				<img src="/images/face.png" alt="">
			</div>
		</div>
	</div>
	<section id="contact-section" class="contact-section">
		<div class="container-fluid contact-container">
			<div class="row contact-row">
				<div class="col-xs-12 email-form-box">
					<form action="" method="POST">
						<!--<h2>I look forward to hearing from you!</h2>-->
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

					    <!--<div class="email-form-input message-input">
						    <p>Message</p>
						    <textarea class="text-element" name="message"></textarea>
					    </div>-->

					    <div class="email-form-btn submit-btn">
								<input class="text-element" id="submit" name="submit" type="submit">
					    </div>

					    <div class="email-form-btn reset-btn">
					    	<input class="text-element" type="reset" value="Clear">
					    </div>
					    <p><?php echo $error; ?></p>
				    </form>
				</div>
			</div>
		</div>
	</section>
</div>


<div class="watch-text-container">
	<!--<input type="text" id="text-element" />-->
	<!-- Or a textarea
	<textarea id="text-element"></textarea>
	-->
	<!--<input type="button" id="trigger" value="Check"/>-->
</div>

</body>


<script>

/*
function initparticles() {
   bubbles();
}

function bubbles() {
   $.each($(".particletext.bubbles"), function(){
      var bubblecount = ($(this).width()/50)*10;
      for(var i = 0; i <= bubblecount; i++) {
         var size = ($.rnd(40,80)/10);
         $(this).append('<span class="particle" style="top:' + $.rnd(20,80) + '%; left:' + $.rnd(0,95) + '%;width:' + size + 'px; height:' + size + 'px;animation-delay: ' + ($.rnd(0,30)/10) + 's;"></span>');
      }
   });
}
jQuery.rnd = function(m,n) {
      m = parseInt(m);
      n = parseInt(n);
      return Math.floor( Math.random() * (n - m + 1) ) + m;
}
*/

/*
window.setInterval(function(){
	$.each($('.particle'), function(){
		$('.particle').css("transform", "translateX("+$.rnd(-95,95)+"%)");
	})
}, 2500);
*/
initparticles();

</script>


<script>
		/*
		document.getElementById("text-element").addEventListener("onfocus", function(){
			document.getElementById("text-element").classList.add("text-active");
		});
		*/

		$(".text-element").on("focusout", function(){
			$(".head").removeClass("open-eye");
		})

		$(".text-element").on("focus", function(){
			$(".text-element").removeClass("text-active");
			$(this).addClass("text-active");
			$(".head").addClass("open-eye");

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

<script>
/*
var folder = "testing-images/";

$.ajax({
  url : folder,
  success: function (data) {
      $(data).find("a").attr("href", function (i, val) {
          if( val.match(/\.(jpe?g|png|gif)$/) ) {
              $("body").append( "<img src='"+ folder + val +"'>" );
          }
      });
  }
});
*/


document.querySelector("body").addEventListener("scroll", scrollMenuCheck);
function scrollMenuCheck(){
	// sticky menu on scroll
  if(window.scrollY >= document.querySelector('.test-header').offsetHeight){
    document.querySelector("body").classList.add("test-active");
    document.querySelector(".test-content").style.marginTop = (document.querySelector(".test-menu").offsetHeight + 5) + "px";
  } else {
    document.querySelector("body").classList.remove("test-active");
  }
}
window.addEventListener("scroll", scrollMenuCheck);
// images slide in and out on scroll
const sliderImages = document.querySelectorAll('.float-image');

function scrollCheck(e){
	sliderImages.forEach(sliderImage => {
		//halfway through the image
		const slideInAt = (window.scrollY + window.innerHeight) - sliderImage.height / 2;
		//bottom of the image
		const imageBottom = sliderImage.offsetTop + sliderImage.height;

		//do the stuff
		const isHalfShown = slideInAt > sliderImage.offsetTop;
		const isNotScrolledPast = window.scrollY < imageBottom;
		if (isHalfShown && isNotScrolledPast) {
			sliderImage.classList.add('active');
		} else {
			sliderImage.classList.remove('active');
		}
	})
}
window.addEventListener("scroll", scrollCheck);

</script>


</html>
