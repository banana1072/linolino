$(function() {
    $(".pop-up-on").click(function() {
        /////////////再生・購入を押した時のポップアップするメニューの格納と実行/////////
        var $pop_up = $(this).parent().parent().parent().parent().parent().find(".pop-up-z");
        $pop_up.fadeIn();
        ///////////////////各アルバムのリンクを取得////////////////////
        var $head_text = $(this).prev().prev().text();
        var $ap_m = $(this).next().find(".ap-m-link").attr('href');
        var $am_m = $(this).next().find(".am-m-link").attr('href');
        var $sp = $(this).next().find(".sp-link").attr('href');
        var $yo_m = $(this).next().find(".yo-m-link").attr('href');
        var $yo = $(this).next().find(".yo-link").attr('href');
        var $li_m = $(this).next().find(".li-m-ink").attr('href');
        ////////////////////////ポップアップの取得//////////////////////////////////////
        var $pop_up_head = $(".pop-up-head");
        var $ap_m_pop = $(".ap-m");
        var $am_m_pop = $(".am-m");
        var $sp_pop = $(".sp");
        var $yo_m_pop = $(".yo-m");
        var $yo_pop = $(".yo");
        var $li_m_pop = $(".ln-m");

        ///////書き換え//////////////////////////
        $pop_up_head.text($head_text);
        $ap_m_pop.attr("href", $ap_m);
        $am_m_pop.attr("href", $am_m);
        $sp_pop.attr("href", $sp);
        $yo_m_pop.attr("href", $yo_m);
        $yo_pop.attr("href", $yo);
        $li_m_pop.attr("href", $li_m);

    });

    $(".back-btn").click(function() {
        $(".pop-up-z").fadeOut();
    })

    $(window).scroll(function() {
        var scrollAnimationElm = document.querySelectorAll('.left');
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
    $(window).scroll(function() {
        var scrollAnimationElm = document.querySelectorAll('.right');
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

});