$('.circle-menu-toggle').click(function(){
  $('.circle-menu-toggle').toggleClass('circle-toggle-active');
  $('.circle-menu-items').toggleClass('circle-items-active');
  $('.circle-menu-back').toggleClass('circle-back-active');
  $('.circle-menu-wrapper').toggleClass('circle-menu-wrapper-active');
});
$(".about").click(function() {
  $('html,body').animate({
      scrollTop: $(".about-section").offset().top},
      'slow');
});
$(".home").click(function() {
  $('html,body').animate({
      scrollTop: $(".header-section").offset().top},
      'slow');
});
$(".contact").click(function() {
  $('html,body').animate({
      scrollTop: $(".about-section").offset().top},
      'slow');
});
$(".rent").click(function() {
  $('html,body').animate({
      scrollTop: $(".rent-space-section").offset().top},
      'slow');
});



// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 44.282801, lng: -88.269698};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 14, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
// Load the API from the specified URL
// The async attribute allows the browser to render the page while the API loads
// The key parameter will contain your own API key (which is not needed for this tutorial)
// The callback parameter executes the initMap() function
