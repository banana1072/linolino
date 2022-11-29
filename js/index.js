$(function() {
    $('.menu-trigger').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.g-navi').addClass('active');
        } else {
            $('.g-navi').removeClass('active');
        }
    });
    $('.nav-wrapper ul li a').click(function() {
        $('.menu-trigger').removeClass('active');
        $('.g-navi').removeClass('active');
    });

    $('.fa-plus').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });

    if (window.matchMedia("(min-width: 1000px)").matches) {
        //画面横幅が768px以下のときの処理
        console.log("成功");
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $(".top-nav").fadeIn();
            } else {
                $(".top-nav").fadeOut();
            }
        });
        $(".top-nav").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    }

    $(window).scroll(function() {
        var scrollAnimationElm = document.querySelectorAll('.scroll_up');
        var scrollAnimationFunc = function() {
            for (var i = 0; i < scrollAnimationElm.length; i++) {
                var triggerMargin = 100;
                if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
                    scrollAnimationElm[i].classList.add('on');
                }
            }
        }
        window.addEventListener('load', scrollAnimationFunc);
        window.addEventListener('scroll', scrollAnimationFunc);
    });
    $(window).on('load', function() {
        setTimeout(function() {
            end_loader();
        }, 1000)
    })

    function end_loader() {
        $('.loader').fadeOut(1000);
    }

});