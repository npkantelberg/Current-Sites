<?php
include('header.php');
?>
  <body class="gallery-page wedding-page">

    <?php include('menu.php'); ?>

    <!--
      all collums must have equal units to fit nicely on all screen sizes

      gal-img-tall = 2
      gal-img-square = 1

    -->

    <?php include('wedding-include.php'); ?>



    <?php
  	include('footer.php');
  	?>
    <script>
    // Lazy Load

    [].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
      img.setAttribute('src', img.getAttribute('data-src'));
      img.onload = function() {
        img.removeAttribute('data-src');
      };
    });
    </script>
