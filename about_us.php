<?php
require 'libs/Smarty.class.php'	;
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
session_start();
include ('/admin/db.php');
$user = null;
if(!empty($_SESSION['vip_name'])){
    $user = $_SESSION['vip_name'];
}
$smarty -> assign('vip_user', $user);

/*广告表查询*/
$ad_list = new db('ad_list');
$about_list = $ad_list -> select("select * from ad_list where pid = 4");
$smarty -> assign('about_list', $about_list);


$smarty -> display("about_us.html");
?>