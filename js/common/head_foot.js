/**
 * Created by Administrator on 2017/3/1 0001.
 */
define(["jquery", "jq_form"], function ($) {
    /*点击登录弹出登录页*/
    $(".login").click(function () {
        $(".body").css("display", "flex");
    });
    $(".click_reg").click(function () {
        $(".body").css("display", "flex");
        $(".login_tab").hide();
        $(".reg_tab").show();
    });
    $(".close").click(function () {
        $(".body").css("display", "none");
    });

    /*登录、注册切换*/
    $(".reg_tab").css("display", "none");
    $(".go_reg").click(function () {
        $(".login_tab").fadeOut(0);
        $(".reg_tab").fadeIn(500);
    })
    $(".go_login").click(function () {
        $(".login_tab").fadeIn(500);
        $(".reg_tab").fadeOut(0);
    });

    /*注册时确认密码*/
    $("#pwd2").focus(function () {
        $(".reg_error").html("");
        $("#res_submit").attr("disabled",false);
    });
    $("#name").blur(function () {
        var name = $("#name").val();
        console.log(typeof name)
        if(name == ""){
            $(".reg_error").html("用户名不能为空！");
            $("#res_submit").attr("disabled",true);
        }
    });
    $("#pwd2").blur(function () {
        var pwd = $("#pwd").val();
        var pwd2 = $("#pwd2").val();
        if(pwd == null ||pwd != pwd2){
            $(".reg_error").html("输入密码不一致，且不能为空！");
            $("#pwd").val("");
            $("#pwd2").val("");
            $("#res_submit").attr("disabled",true);
        }
    });
    /*注册*/
     $("#res_submit").click(function () {
         $("#reg_form").ajaxSubmit({
             url:"reg_vip_post.php",
             type:"POST",
             success:function(data){
                 //document.write(data);
                 if(data==1){
                     sessionStorage.setItem("reg_status", "reg_success");
                 }else{
                     //alert('增加失败！');
                     return false;
                 }
             },
             error:function(msg){
                 //console.log("error:"+msg);
             }
         })
     });
    if(sessionStorage.reg_status == "reg_success"){
        $(".body").css("display", "flex");
        $(".login_tab").fadeIn(500);
        $(".reg_tab").fadeOut(0);
    }

    /*验证码*/
    $('.code_img').click(function(){
        $(this).attr('src','/code.php?Math.random()');
    });

    /*登录*/
    $("#vip_login").click(function () {
        $("#login_form").ajaxSubmit({
            url:"/vip_login_post.php",
            type:"POST",
            success:function(data){
                //document.write(data);
                if(data == "user_null"){
                    alert("请输入用户名！");
                    $(".login_error").html("请输入用户名！");
                    return false;
                }
                if(data == "pwd_null"){
                    alert("请输入密码！");
                    $(".login_error").html("请输入密码！");
                    return ;
                }
                if(data == "code_error"){
                    alert("验证码错误！");
                    $(".login_error").html("验证码错误！");
                    return ;
                }
                if(data == 1){
                    sessionStorage.removeItem("reg_status");
                    location.replace("index.php");
                }
                if(data == 0){
                    alert("用户名或密码错误！");
                }
            },
            error:function(msg){
                //console.log("error:"+msg);
            }
        });

    });
});