<?php
include('header.php');
?>

  <body class="gallery-page">

    <?php include('menu.php'); ?>

    <!--
      all collums must have equal units to fit nicely on all screen sizes

      gal-img-tall = 2
      gal-img-square = 1

    -->

    <section class="wedding-gallery-header-section">
      <div class="wedding-gallery-header-wrapper"><img src="/images/wedding/the-big-day.png" alt=""></div>
    </section>

    <section class="gallery-section">
      <div class="gallery-wrapper">

        <div class="gallery-col">

          <div class="gal-img-box">
            <!-- <img src="../images/wedding/McGregor/mcgregor.jpg"> -->
            <div class="gal-img gal-img-tall gal-img-mcgregor">

            </div>
            <a href="#collapse1" class="gal-img-hover" data-toggle="modal" data-target="#modalLong1">
              <p>Steven and Stephanie</p>
              <p>Mcgregor</p>
            </a>
          </div>

          <div class="gal-img-box">
            <!-- <img src="../images/wedding/Barnowsky/barnowsky.jpg"> -->
            <div class="gal-img gal-img-square gal-img-barnowsky">

            </div>
            <a href="#collapse2" class="gal-img-hover" data-toggle="modal" data-target="#modalLong2">
              <p>Matt and Ashley</p>
              <p>Barnowsky</p>
            </a>
          </div>

          <div class="gal-img-box">
            <!-- <img src="../images/wedding/Franzke/franzke.jpg"> -->
            <div class="gal-img gal-img-tall gal-img-franzke">

            </div>
            <a href="#collapse3" class="gal-img-hover" data-toggle="modal" data-target="#modalLong3">
              <p>Cat and Matt</p>
              <p>Franzke</p>
            </a>
          </div>
        </div>

        <div class="gallery-col">
          <div class="gal-img-box">
            <!-- <img src="../images/wedding/West/west.jpg"> -->
            <div class="gal-img gal-img-square gal-img-west">

            </div>
            <a href="#collapse4" class="gal-img-hover" data-toggle="modal" data-target="#modalLong4">
              <p>Brittany and Tret</p>
              <p>West</p>
            </a>
          </div>
          <div class="gal-img-box">
            <!-- <img src="../images/wedding/Modene/modene.jpg"> -->
            <div class="gal-img gal-img-tall gal-img-modene">

            </div>
            <a href="#collapse5" class="gal-img-hover" data-toggle="modal" data-target="#modalLong5">
              <p>Dustin and Elizabeth</p>
              <p>Modene</p>
            </a>
          </div>
          <div class="gal-img-box">
            <!-- <img src="../images/wedding/Anderson/anderson.jpg"> -->
            <div class="gal-img gal-img-tall gal-img-anderson">

            </div>
            <a href="#collapse6" class="gal-img-hover" data-toggle="modal" data-target="#modalLong6">
              <p>Zach and Alyssa</p>
              <p>Anderson</p>
            </a>
          </div>
        </div>

        <div class="gallery-col">
          <div class="gal-img-box">
            <!-- <img src="../images/wedding/Heather/heather.jpg"> -->
            <div class="gal-img gal-img-tall gal-img-heather">

            </div>
            <a href="#collapse7" class="gal-img-hover" data-toggle="modal" data-target="#modalLong7">
              <p>Sherri and Thomas</p>
              <p>Heather</p>
            </a>
          </div>
          <div class="gal-img-box">
            <!-- <img src="../images/wedding/Jansen/jansen.jpg"> -->
            <div class="gal-img gal-img-tall gal-img-jansen">

            </div>
            <a href="#collapse8" class="gal-img-hover" data-toggle="modal" data-target="#modalLong8">
              <p>Kayla and Charlie</p>
              <p>jansen</p>
            </a>
          </div>
          <div class="gal-img-box">
            <!-- <img src="../images/wedding/Brouillard/brouillard.jpg"> -->
            <div class="gal-img gal-img-square gal-img-brouillard">

            </div>
            <a href="#collapse9" class="gal-img-hover" data-toggle="modal" data-target="#modalLong9">
              <p>Amanda and Buck</p>
              <p>Brouillard</p>
            </a>
          </div>
        </div>

        <div class="gallery-col">
          <div class="gal-img-box">
            <div class="gal-img gal-img-tall gal-img-capelle">

            </div>
            <a href="#collapse10" class="gal-img-hover" data-toggle="modal" data-target="#modalLong10">
              <p>Kendra & Tyler</p>
              <p>Capelle</p>
            </a>
          </div>
          <div class="gal-img-box">
            <!-- <img src="../images/wedding/Baird/baird.jpg"> -->
            <div class="gal-img gal-img-square gal-img-baird">

            </div>
            <a href="#collapse11" class="gal-img-hover" data-toggle="modal" data-target="#modalLong11">
              <p>Amber and Kyle</p>
              <p>Baird</p>
            </a>
          </div>
          <div class="gal-img-box">
            <!-- <img src="../images/wedding/Bishop/bishop.jpg"> -->
            <div class="gal-img gal-img-tall gal-img-bishop">

            </div>
            <a href="#collapse12" class="gal-img-hover" data-toggle="modal" data-target="#modalLong12">
              <p>Trista and Kevin</p>
              <p>Bishop</p>
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modalLong1" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The McGregors</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong2" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Barnowskys</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong3" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Franzkes</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong4" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Wests</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong5" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Modenes</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong6" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Andersons</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong7" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Heathers</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong8" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Jansens</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong9" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Brouillards</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong10" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Capelles</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong11" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Bairds</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLong12" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLongTitle">The Bishops</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-gallery-wrapper">
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
              <div class="modal-gallery-image">
                <img src="/images/wedding/Anderson/anderson.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>


    <?php
    include('../footer.php');
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
