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
$mygoods =new db('goods');
$mysort =new db('goods_sort');
//查顶级分类
$sort_list=$mysort->select("select * from goods_sort where ord>=0 order by ord desc");
$smarty->assign('sort_list', $sort_list);

//编辑
if(!empty($_GET['id'])){
	$id=$_GET['id'];
	$ed_arr=$mygoods->find("select * from goods where id='$id'");
	//var_dump(json_decode($ed_arr['select_option']));
	$smarty->assign('select_option',unserialize($ed_arr['select_option']));
	$smarty->assign('photos',unserialize($ed_arr['photos']));
	
	$smarty->assign('ed_list', $ed_arr);
}else{
	$ed_arr['id']=0;
	$smarty->assign('ed_list', $ed_arr);
}

//查询商品分类
$sort_arr=$mysort->select("select * from goods_sort");
foreach($sort_arr as $v){
	$sort_arr[$v['id']]=$v['name'];	
}
$smarty->assign('sort_goods',$sort_arr);


$smarty->display('goods_form.html');	
?>
