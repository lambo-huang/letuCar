<?php
session_start();
require 'libs/Smarty.class.php';
include('db.php');
$smarty=new Smarty;	
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
if($_SESSION['myname']==''){
	echo '<script>alert("请登录!");location.replace("login.php")</script>';
}
$mygoods =new db('goods');
$mysort =new db('goods_sort');
//查顶级分类
$top_sort_list=$mysort->select("select * from goods_sort where pid=0 and ord>=0 order by ord desc");
$smarty->assign('tsl', $top_sort_list);

//编辑
if(!empty($_GET['id'])){
	$id=$_GET['id'];
	$ed_arr=$mygoods->find("select * from goods where id='$id'");
	$smarty->assign('ed_list', $ed_arr);
}




$smarty->display('add_goods.html');	
?>
