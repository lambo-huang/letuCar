<?php
require 'libs/Smarty.class.php'	;
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include ('admin/db.php');
session_start();
$smarty -> assign('vip_user', $_SESSION['vip_name']);
/*查询广告表中的轮播图数据*/
$ad_list = new db('ad_list');

$lunbo_imgs = $ad_list -> select("select * from ad_list where pid = 1");
$smarty -> assign('lunbo_imgs', $lunbo_imgs);

$smarty -> display("index.html");
?>