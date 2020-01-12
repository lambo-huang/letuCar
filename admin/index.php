<?php
session_start();
require 'libs/Smarty.class.php';
include('db.php');
$smarty=new Smarty;	
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
if($_SESSION['myname']==''){
	echo '<script>location.replace("login.php")</script>';
}
$user_name=$_SESSION['myname'];
$smarty->assign('user_name',$user_name);

/*查询登录人员*/
$admin_list = new db("admin");
$admin = $admin_list->find("select * from admin where user = '$user_name'");
$user_photo = $admin['photo'];
$smarty->assign('user_photo',$user_photo);

$smarty->display('index.html');
?>
