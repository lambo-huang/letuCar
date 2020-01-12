<?php
/* Smarty version 3.1.30, created on 2017-04-26 22:33:52
  from "G:\wamp\www\LetuCar\admin\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5900afd00a8255_07895761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32c0032bbfb02bc317521e004c2b9658c438a4d3' => 
    array (
      0 => 'G:\\wamp\\www\\LetuCar\\admin\\templates\\index.html',
      1 => 1493217230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5900afd00a8255_07895761 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/metisMenu-master/dist/metisMenu.css"/>
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/metisMenu-master/test/demo.css"/>
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/metisMenu-master/test/mini.css"/>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/dist/css/animate.css"/>
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/dist/css/jquery-confirm.css"/>
<link rel="stylesheet" type="text/css" href="/admin/css/index.css"/>

<!--<?php echo '<script'; ?>
 src="/admin/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/admin/ckeditor/config.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>-->

<?php echo '<script'; ?>
 type="text/javascript" src="/admin/js/jquery-3.1.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/bootstrap/dist/js/jquery-confirm.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/bootstrap/metisMenu-master/dist/metisMenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/js/jquery.form.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container-fluid">
<div class="row row1">
 <div class="col-md-2 pull-left">
 	<img src="img/logo.png" height="50px" style="margin-left: 20px" />
 </div>
  <div class="col-md-10 pull-right">
 	<div class="pull-left ad_top"><span id="top_ad">欢迎来到乐途汽车后台管理~</span></div>
 	<div class="pull-right ad_top" style="margin-right: 20px"><img src="/upload/admin/<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
?<?php echo rand(1,999);?>
" class="head_img"/><span><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</span>&nbsp;&nbsp;<a href="exit.php" target="_parent" class="ad_top">退出</a></div>
 </div>
</div>
<div class="row mian_box">
  <div class=" aside_fl">
	<aside class="sidebar">
	<nav class="sidebar-nav">
      <ul class="metismenu" id="menu">
        <li class="active">
            <a href="javascript:void(0)" aria-expanded="true">
                <span class="sidebar-nav-item-icon fa fa-github fa-lg"></span>
                <span class="sidebar-nav-item">管理员管理</span>
                <span class="fa arrow"></span>
            </a>
            <ul aria-expanded="true" class="animated bounceInLeft left_nav">
                <li>
                    <a href="admin.php">
                        <span class="sidebar-nav-item-icon fa fa-code-fork"></span>
                       	 管理员列表
                    </a>
                </li>
                <li>
                    <a href="sort.php">
                        <span class="sidebar-nav-item-icon fa fa-star"></span>
                        	分类管理
                    </a>
                </li>
                <li>
                    <a href="goods.php">
                        <span class="sidebar-nav-item-icon fa fa-exclamation-triangle"></span>
                        	商品管理
                    </a>
                </li>
                <li>
                    <a href="ad_list.php">
                        <span class="sidebar-nav-item-icon fa fa-exclamation-triangle"></span>
                        广告管理
                    </a>
                </li>
            </ul>
        </li>      
        <li class="active">
            <a href="#" aria-expanded="true">
                <span class="sidebar-nav-item-icon fa fa-github fa-lg"></span>
                <span class="sidebar-nav-item">会员管理</span>
                <span class="fa arrow"></span>
            </a>
            <ul aria-expanded="true" class="animated fadeIn left_nav">
                <li>
                    <a href="vip_data.php">
                        <span class="sidebar-nav-item-icon fa fa-code-fork"></span>会员列表
                    </a>
                </li>
                <li>
                    <a href="vip_order.php">
                        <span class="sidebar-nav-item-icon fa fa-star"></span>会员预约
                    </a>
                </li>
            </ul>
        </li>
     </ul>
</nav>
</aside>
  </div>
  <div id="admin_show" class="">
  	<div class="huan">欢迎来到乐途汽车后台管理~</div>
  	
  </div>      
</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

/*var doc_hei=document.body.clientHeight-300;
var right_hei=0;



function hei(){
	right_hei=$('.list').height();
	if(right_hei>doc_hei){
		$('.aside_fl').css('height',right_hei+'px');
	}else{
		$('.aside_fl').css('height',doc_hei+'px');
	}
}
hei();*/


//右侧导航
$(function(){
	 $('#menu').metisMenu()
});

function zlist(){
	$('.form').css('transform', 'rotateX(0deg)');
	$('.list').css('transform', 'rotateX(90deg)');
};
function zform(){
	$('.form').css('transform', 'rotateX(90deg)');
	$('.list').css('transform', 'rotateX(0deg)');
};

$('.left_nav li a').click(function(){
	var url=$(this).attr('href');
	//console.log(url)
	$.get(url,function(data){
		$('#admin_show').html(data);
	});
	
	return false;
});






<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
