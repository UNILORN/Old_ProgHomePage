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

  $('.content-first-inner').box2fullWidth({
  minwidth:400,
  who:'div',
  margin:40,
  duration:200,
  boxdelay:0,
  bottomMargin:50,
  positionComplete:function(){ }
});

  $(".content-box").hover(function(){
    $(this).find(".content-box-lay").fadeIn();
    $(this).find(".content-box-lay").css("display","table");
    $(this).find(".content-box-inner").fadeIn();
    var num = $(this).find("input").val();
    var text = ".content-fixed-num" + num;
    $(text).show('slide',300);
    $(text).css("display","table");
  },function(){
    $(this).find(".content-box-lay").fadeOut();
    $(this).find(".content-box-inner").fadeOut();
    var num = $(this).find("input").val();
    var text = ".content-fixed-num" + num;
    $(text).hide('slide',300);
  });





});
