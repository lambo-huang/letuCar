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
$ad=new db('ad_list');
//标题
$t_list=$ad->select("select * from ad_list where pid=0");
$smarty->assign('t_list',$t_list);


//编辑查询
if($_GET['ed_id']){
	$id=$_GET['ed_id'];
	$ed_list=$ad->find("select * from ad_list where id='$id'");	
	$smarty->assign('ed_list',$ed_list);
}



$smarty->display('ad_list_form.html');
?>