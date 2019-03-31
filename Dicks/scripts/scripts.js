window.onload = function(){
  $('.menu-about-li').click(function() {
  	$('.about-page').addClass('active-page');
  	$('.menu-page').removeClass('active-page');
    $('.contact-page').removeClass('active-page');
    $('.actual-menu-page').removeClass('active-page');
    $('.drop-in-nav').removeClass('active-nav');
    $('.menu-page').removeClass('active-page-animate');
    setTimeout(function() {
      $('.menu-page').addClass('menu-hide');
    }, 900);
  });
  $('.actual-menu-li').click(function() {
  	$('.actual-menu-page').addClass('active-page');
    $('.contact-page').removeClass('active-page');
  	$('.menu-page').removeClass('active-page');
    $('.drop-in-nav').removeClass('active-nav');
    $('.menu-page').removeClass('active-page-animate');
    $('.about-page').removeClass('active-page');
    setTimeout(function() {
      $('.menu-page').addClass('menu-hide');
    }, 900);
  });
  $('.menu-contact-li').click(function() {
  	$('.contact-page').addClass('active-page');
  	$('.actual-menu-page').removeClass('active-page');
    $('.drop-in-nav').removeClass('active-nav');
    $('.menu-page').removeClass('active-page-animate');
    $('.about-page').removeClass('active-page');
    setTimeout(function() {
      $('.menu-page').addClass('menu-hide');
    }, 900);
  });
  $('.menu-apply-li').click(function() {
  	$('.apply-page').addClass('active-page');
  	$('.menu-page').removeClass('active-page');
    $('.menu-page').removeClass('active-page-animate');
    $('.contact-page').removeClass('active-page');
    $('.actual-menu-page').removeClass('active-page');
    $('.about-page').removeClass('active-page');
    setTimeout(function() {
      $('.menu-page').addClass('menu-hide');
    }, 900);
    $('.drop-in-nav').removeClass('active-nav');
  });
  $('.menu-toggle').click(function() {
    $('.menu-page').addClass('active-page');
    $('.drop-in-nav').toggleClass('active-nav');
    $('.menu-page').removeClass('menu-hide');
    setTimeout(function(){
      $('.menu-page').addClass('active-page-animate');
    }, 100);
    setTimeout(function() {
      $('.apply-page').removeClass('active-page');
      $('.about-page').removeClass('active-page');
    }, 1000);
  });
}
