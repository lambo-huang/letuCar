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
$mydb =new db('admin');
$list=$mydb->select("select * from admin order by id desc");
$smarty->assign('admin_list',$list);

$smarty->display('admin.html');	
?>