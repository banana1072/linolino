$(function() {
    $(".fa-plus").click(function() {
        var $title_exp = $(this).parent().parent().find(".title-exp");
        $title_exp.slideToggle(500);
    });
});