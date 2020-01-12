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
$order =new db('vip_appointment');
//分页  
$all=$order->select("select count(*) as n from vip_appointment");
$page_size=2;
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

$vip_order=$order->select("select * from vip_appointment order by id desc limit $start,$page_size");
$smarty->assign('vip_order',$vip_order);

/*查询分类表*/
$sort = new db('goods_sort');
$sort_list = $sort -> select("select * from goods_sort");
foreach ($sort_list as $v){
    $sort_name[$v['id']] = $v['name'];
}
$smarty -> assign('sort_name', $sort_name);

/*查询会员表*/
$vip_data = new db('vip_data');
$vip_list = $vip_data -> select("select * from vip_data");
foreach ($vip_list as $v){
    $vip_name[$v['id']] = $v['user'];
}
$smarty -> assign('vip_name', $vip_name);


$smarty->display('vip_order.html');	
?>