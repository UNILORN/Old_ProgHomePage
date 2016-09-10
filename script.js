var flug = 0;
$(function() {
    var contentfirst = $('.content-first').offset().top
    var contentsecond = $('.content').offset().top
    $(".content-fixed").css("margin-left","0px");
    $(".content-fixed").css("margin-left","");
    $(window).scroll(function() {
        var top = $(window).scrollTop();
        if (top <= contentfirst && flug != 0) {
            flug = 0;
            $(".image-1").fadeIn();
            $(".image-2").fadeOut();
        }
        if (top > contentfirst && flug != 1) {
            flug = 1;
            $(".image-1").fadeOut();
            $(".image-2").fadeIn();
        }
    });

    $('.content-first-inner').box2fullWidth({
        minwidth: 400,
        who: 'div',
        margin: 40,
        duration: 200,
        boxdelay: 0,
        bottomMargin: 50,
        positionComplete: function() {}
    });

    $(".content-box").hover(function() {
        $(this).find(".content-box-lay").css("opacity", "1");
        $(this).find(".content-box-inner").css("opacity","1");

        var num = $(this).find("input").val();
        var text = ".content-fixed-num" + num;
        $(text).css("margin-left","0px");
        $(text).css("display", "table");
    }, function() {
        $(this).find(".content-box-lay").css("opacity","0");
        $(this).find(".content-box-inner").css("opacity","0");

        var num = $(this).find("input").val();
        var text = ".content-fixed-num" + num;
        $(text).css("margin-left","");
    });
});
