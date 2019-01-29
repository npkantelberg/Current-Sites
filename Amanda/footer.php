</body>
  <section class="instagram-section">
    <!--<iframe class="mobile-hidden" src="//lightwidget.com/widgets/cd2eb8ab24aa5364bb3e1b5493094825.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
    <iframe class="desktop-hidden" src="//lightwidget.com/widgets/a7f885fa7628561c8de4be2683e5471d.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>-->
    <div class="instafeed" id="instafeed"></div>
  </section>
  <section class="footer-section">
    <div class="footer-wrapper">

      <div class="sitemap">
        <a href="http://amandaleaphotography.com">Home</a>
        <a href="http://amandaleaphotography.com/clp/gallery.php">Gallery</a>
        <a href="http://amandaleaphotography.com/clp/about.php">About</a>
        <!--<a href="http://amandaleaphotography.com/clp/contact.php">Contact</a>-->
        <a href="http://amandaleaphotography.com/clp/misc.php">Investment</a>
        <a href="http://amandaleaphotography.com/clp/misc.php">Extra</a>
      </div>
      <div class="copyright">
        Amanda Lea Photography
      </div>
    </div>
  </section>

<!--<div class="loading-box">
  <div class="loader">

  </div>
  <div class="loader-2">

  </div>
  <div class="loader-3">

  </div>
</div>-->


  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>

  <script type="text/javascript">
  /* slick slider */

    $(document).ready(function(){
      $('.testimonials-box .single-item').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 500
      });
    });

    $(document).ready(function(){
      $('.jumbotron-section .single-item-slide').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 500,
      });
    });
  </script>
  <script>
  /* menu toggle */
    $(document).ready(function(){
      $('.menu-item').click(function(){
        $(this).toggleClass('menu-item-dropdown');
        $(this).toggleClass('menu-item-click');
      });
      $('.menu-toggle').click(function(){
        $('.mobile-menu-dropdown').toggleClass('expand');
      });
      $('.inner-dropdown').click(function(){
        $(this).toggleClass('sub-expand');
      });
    });
  </script>

  <!-- LightWidget WIDGET -->
  <!--<script src="//lightwidget.com/widgets/lightwidget.js"></script>-->

  <script>

/*
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
*/

  var userFeed = new Instafeed({
      get: 'user',
      userId: '1643058565',
      accessToken: '1643058565.1677ed0.6ce0cc99975c49878b336dfe5d60054e',
      template: '<a target="_blank" href="{{link}}"><img src="{{image}}" /></a>',
      limit: 10,
      resolution: 'standard_resolution'
  });
  userFeed.run();

  </script>

  <script>

    /*var scrolled = $(this).scrollTop();*/

  	$('.modal-dialog .modal-gallery-image').click(function(){
      /*$(this).css('top', scrolled + 'px');*/
  		$(this).toggleClass('modal-gallery-image-expand');
  		$('.modal-gallery-image-expand').not(this).removeClass('modal-gallery-image-expand');
      /*document.getElementsByClassName('modal-gallery-image-expand')[0].style.bottom = document.getElementsByClassName('modal-gallery-wrapper')[0].scrollTop();*/

      /*var modalHeight = document.getElementsByClassName('show')[0].scrollHeight / 2;*/
      /*$('.modal').animate({*/
        /*scrollTop: $(".modal-gallery-image-expand").offset().top - $(".modal-gallery-image-expand").offset().top * 2*/
        /*scrollTop: $('.modal').offset().top
      }, 2000);*/

      /*document.getElementsByClassName('show')[0].scrollTo(modalHeight, 0);*/
    });
    $('.image-click-box').click(function(){
      $('.modal-gallery-image').removeClass('modal-gallery-image-expand');
    });

  </script>

  <script>
  /*window.setTimeout(function(){
    $('.loading-box').addClass("hide");
  }, 5000);*/
  </script>
