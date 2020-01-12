define(["jquery"],function ($) {
    function resize_div() {
        $(".imgs").each(function () {
            var img_height = $(this).height() - 20 + "px";
            $(this).find(".img").css("height", img_height);
        })
    }
    resize_div();
    window.onresize = function () {
        resize_div();
    }
});