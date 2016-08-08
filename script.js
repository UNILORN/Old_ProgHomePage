var flug = 0;
$(function(){
  var contentfirst = $('.content-first').offset().top
  var contentsecond = $('.content-second').offset().top
  $(window).scroll(function(){
    var top = $(window).scrollTop();
    if( top <= contentfirst && flug != 0){
      flug = 0;
      $(".image-1").fadeIn();
      $(".image-2").fadeOut();
      $(".image-3").fadeOut();
    }
    if( top > contentfirst && top <= contentsecond && flug != 1){
      flug = 1;
      $(".image-1").fadeOut();
      $(".image-2").fadeIn();
      $(".image-3").fadeOut();
    }
    if (top > contentsecond && flug != 2){
      flug = 2;
      $(".image-1").fadeOut();
      $(".image-2").fadeOut();
      $(".image-3").fadeIn();
    }
  });
});
