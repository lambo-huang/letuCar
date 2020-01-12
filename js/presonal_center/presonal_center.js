define(["jquery", "area"], function ($) {
    function resize() {
        var client_height = document.body.clientHeight;
       $(".main").css("min-height", client_height -  241 + "px");
    }
    resize();
    window.onresize = function () {
        resize();
    };

    /*个人资料、我的预约切换*/
    $(".aside div").click(function () {
        $(this).addClass("select_bgcolor").siblings().removeClass("select_bgcolor");
        var txt = $(this).text();
        if(txt == "个人资料"){
            $(".presonal_data").show();
            $(".goods_list").hide();
        }
        if(txt == "我的预约"){
            $(".presonal_data").hide();
            $(".goods_list").show();
        }
    });

   /*头像上传预览*/
    $("#vip_head").change(function(){
        var objUrl = getObjectURL(this.files[0]) ;
        console.log("objUrl = "+objUrl) ;
        if (objUrl) {
            $(this).siblings(".photo").attr("src", objUrl) ;
        }
    });
    //建立一個可存取到該file的url
    function getObjectURL(file) {
        var url = null ;
        if (window.createObjectURL!=undefined) { // basic
            url = window.createObjectURL(file) ;
        } else if (window.URL!=undefined) { // mozilla(firefox)
            url = window.URL.createObjectURL(file) ;
        } else if (window.webkitURL!=undefined) { // webkit or chrome
            url = window.webkitURL.createObjectURL(file) ;
        }
        return url ;
    }

    /*确认密码*/
    $(".pwd2").change(function () {
       var pwd = $(".pwd").val();
       var pwd2 = $(this).val();
       if(pwd != pwd2){
           $(".pwd").val("");
           $(this).val("");
           alert("两次输入密码不一致，请重新输入！");
           return ;
       }
    });

    /*删除我的预约*/
    $(".del_list").click(function () {
       $(this).parent().remove();
    });

    //省市县三级联动
   /* var Gid  = document.getElementById ;
    var showArea = function(){
        $('#show').innerHTML = "<h3>省" + $('#s_province').value + " - 市" +
            $('#s_city').value + " - 县/区" +
            $('#s_county').value + "</h3>"
    };*/
    // $('#s_county').setAttribute('onchange','showArea()');

});