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

//汽车品牌分类
$sort_arr=$mysort->select("select * from goods_sort");
foreach($sort_arr as $v){
	$sort_arr[$v['id']]=$v['name'];	
}
$smarty->assign('sort_goods',$sort_arr);

//分页  //商品相关信息
$all=$mygoods->select("select count(*) as n from goods");
$page_size=15;
$page=$_GET['page'];
$page=($page==''? 1:$page);
$smarty->assign('page', $page);
$start=($page-1)*$page_size;
//总页数
$all_page=ceil($all[0]['n']/$page_size);
$smarty->assign('all_page', $all_page);
//上一页
$prev_page=$page-1;
$smarty->assign('prev_page', $prev_page);
//下一页
$next_page=$page+1;
$smarty->assign('next_page', $next_page);

$goods_list=$mygoods->select("select * from goods order by id desc limit $start,$page_size");
$smarty->assign('goods', $goods_list);


$smarty->display('goods.html');	
?>
