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
// 编辑
if(!empty($_GET['id'])){
	$id=$_GET['id'];
	$ed_list=$mydb->find("select * from admin where id='$id'");
	$smarty->assign('ed_list',$ed_list);
}
$smarty->display('admin_form.html');		
?>