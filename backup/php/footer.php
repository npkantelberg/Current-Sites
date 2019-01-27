<section class="footer-section">
  <div class="container-fluid footer-container">
    <div class="row footer-row">
      <div class="col-xs-12 footer-box">
        <div class="row footer-item-row">
          <div class="col-xs-12 col-sm-6 footer-item-box footer-item-boxL">
            <span>Nicholas Kantelberg | </span>
            <span class="color1">Nkantelberg.com</span>
          </div>
          <div class="col-xs-12 col-sm-6 footer-item-box footer-item-boxR">
            <span>Created by Nicholas Kantelberg | 01/01/2017</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>

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
