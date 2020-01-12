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
$mysort =new db('goods_sort');
//汽车分类
$sort_list=$mysort->select("select * from goods_sort order by ord desc");
$smarty->assign('sort_list', $sort_list);



$smarty->display('sort.html');	
?>
