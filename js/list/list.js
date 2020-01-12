define(["jquery", "amz"], function ($) {
    $(function() {
        $('.am-slider').flexslider();  //轮播图
    function resize() {
        var w = $(".car_img").width();
        $(".am-slides li").css({
            "width": w + "px",
            "height": w / 2 + "px"
        });
        $(".am-slider .am-slides img").css({
            "width": w + "px",
            "height": w / 2 + "px"
        });
        $(".car_about").css("height", w / 2 + 90 + "px");

        var client_height = document.body.clientHeight;
        var head_height = $("header").height();
        var foot_height = $("footer").outerHeight();
        console.log(client_height, head_height, foot_height);
        var min_height = client_height - head_height - foot_height + "px";
        $(".main").css("min-height", min_height);
    };
    resize();
    window.onresize = function () {
        resize();
    }
    });
    /*立即预约*/
    $(".appointment").on("click", function () {
        var t = $(this);
        var txt = $(this).text();
        var user_id = $("#vip_id").val();
        if(user_id == ""){
            alert('请登录！');
            return ;
        }
        if(txt == "已预约") return ;
        var apt_success = $(this).parent().parent().parent().children(".apt_success");
        var car_id = $(this).attr("data-car-id");
        $.post('yuyue_success.php', {user_id: user_id, car_id: car_id}, function (data) {
            //document.write(data);
            if(data == 1){
                $.get('/list.php');
                t.html("已预约");
                apt_success.fadeIn();
                setTimeout(function () {
                    apt_success.fadeOut(900);
                }, 800);
            }
        });



    })

});