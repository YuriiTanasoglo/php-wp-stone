$(document).ready(function () {
  $(".start-screen").on("click", function(e){
    var target = $(e.target);
    // if (!target.is('.menu-icon')&&!target.is('i')&&!target.is('li')){
      var top = $(".main-wrapper").offset().top;
      $('body,html').animate({scrollTop: top}, 500);
    // }

  });
  $(".menu-trigger").click(function() {
    $(".menu li").slideToggle(500);
  });
  $(window).resize(function () {
    if($(window).width() > 768) {
      $('.menu li').removeAttr('style');
    }
  });
});
