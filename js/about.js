$(function() {
    $(window).scroll(function() {
        console.log($(this).scrollTop());
        var $top = $(this).scrollTop();
        if ($(this).scrollTop() > 550) {
            $(".fir").animate({ height: 2800 }, 5000);
        } else {

        }

    });


});