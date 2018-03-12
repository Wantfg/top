$(document).ready(function () {
    $("#gototop").click(function () {
        $("html,body").animate({ scrollTop: 0 }, 800); return false;
    });
    $("#gotocate").click(function () {
        $("html,body").animate({ scrollTop: $("#categories").offset().top - 88 }, 800); return false;
    });

    $("#small_search").click(function () {
        $("#topsearch").slideToggle();
    });

    if ($(window).width() > 768) {
        $('ul.nav li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).slideDown();
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).slideUp();
        });
    }

    $(window).scroll(function () {
        var scrolls = $(window).scrollTop()
        if (scrolls > 60) {
            $("#top_nav").addClass("navbar-fixed-top")
        } else {
            $("#top_nav").removeClass("navbar-fixed-top")
        }
    });

    $("ul.menu_body").each(function () {
        if ($(this).text().replace(/[\r\n ]/g, "").length <= 0) { $(this).prev().remove(); }
    });

    $("#firstpane span.menu_head").click(function () {
        var spanatt = $(this).next("ul.menu_body").css('display');
        if (spanatt == "block") {
            var spantext = "+";
            $(this).prev().removeClass("left_active");
        } else {
            var spantext = "-";
            $(this).prev().addClass("left_active");
        }
        $(this).html(spantext).addClass("current").next("ul.menu_body").slideToggle(300).siblings("ul.menu_body");
    });


});