(function ($) {
	
	"use strict";

    function left_click(){
        $(this).off("click");
        var t  = $(this);
        var pt = $(this).parent().parent().children("ul");
        var lim= (pt.children("li").length - 4) * 240;
        if (parseInt(pt.css("left")) > -lim) pt.animate({left:"-=240px"}, 500, function(){
            t.on("click", left_click );
        });
        else t.on("click", left_click );
    }

    function right_click(){
        $(this).off("click");
        var t  = $(this);
        var pt = $(this).parent().parent().children("ul");
        if (parseInt(pt.css("left")) < 0) pt.animate({left:"+=240px"}, 500, function(){
            t.on("click", right_click );
        });
        else t.on("click", right_click );
    }

	$(document).ready(function () {

		// клик по стрелочке "влево" на нижнем слайдере на главной
        $(".slider .left > a").on("click", left_click );

        // клик по стрелочке "вправо" на нижнем слайдере на главной
        $(".slider .right > a").on("click", right_click );

        //
        /*$(".text-min > a").on("click", function(){
            var t1 = parseInt($(this).parent().height());
            var t2 = parseInt($(this).parent().next().height());
            $(this).parent().animate({"height":0}, 500, function(){
                $(this).css("height", t1);
            }).hide(0).next().height(0).show().animate({"height": t2}, 500);
        });

        //
        $(".text-full > a").on("click", function(){
            var t1 = parseInt($(this).parent().height());
            var t2 = parseInt($(this).parent().prev().height());
            $(this).parent().animate({"height":0}, 500, function(){
                $(this).css("height", t1);
            }).hide(0).prev().height(0).show().animate({"height": t2}, 500);
        });*/

        // нижний слайдер на главной
        $(".slider-menu span").on("click", function() {
            $(".slider-menu span").removeClass("active");
            $(this).addClass("active");
            $(".slider > div").css("height", 0).removeClass("in").find(":eq("+$(this).parent().index()+")").addClass("in");
        });

        // верхнее меню
        $(".main-menu a").on("click", function(){
            $(".main-menu li").removeClass("active");
            $(this).parent().addClass("active");
            $(".catalog-submenu").css("height", 0).removeClass("in").find(":eq("+$(this).parent().index()+")").addClass("in");
        });
	});
	
})(window.jQuery); 