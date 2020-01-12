define(["amz"], function () {
    /*图片轮播*/
    $('.am-slider').flexslider({
        playAfterPaused: 5000,
        controlNav: false,
        before: function(slider) {
            if (slider._pausedTimer) {
                window.clearTimeout(slider._pausedTimer);
                slider._pausedTimer = null;
            }
        },
        after: function(slider) {
            var pauseTime = slider.vars.playAfterPaused;
            if (pauseTime && !isNaN(pauseTime) && !slider.playing) {
                if (!slider.manualPause && !slider.manualPlay && !slider.stopped) {
                    slider._pausedTimer = window.setTimeout(function() {
                        slider.play();
                    }, pauseTime);
                }
            }
        }
    });
    function resize() {
        var client_height = document.documentElement.clientHeight - 180 + "px";
        var w = document.documentElement.clientWidth + "px";
        $(".am-slider").css("height", client_height );
        $(".am-sliders img").css({
            "height": client_height,
            "width": w
        });
        $(".am-viewport").css({
            "height": client_height,
            "width": w
        });
    }
    resize();
    window.onresize =function () {
        resize();
    };
    /*换一换*/
    $("#btn_rand").click(function () {
        get_car_name();
    });
    function get_car_name() {
        $.get("rand_car_name.php", function (data) {
            var res = eval('('+data+')');
            var htm = '';
            for(var n in res){
                htm += '<li sort-id="'+ res[n].id +'">'+ res[n].name +'</li>';
            }
            $(".key_word").html(htm);
        })
    }
    get_car_name();

    /*搜索框关键词填充*/
    $(".key_word").on("click", "li", function (){
        var key_word = $(this).text();
        var data_id = $(this).attr("sort-id");
        $("#sort_id").val(data_id);
        $(".car_name").val(key_word);
    });


    return{

}
})