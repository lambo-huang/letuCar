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

$vip =new db('vip_data');
//分页  
$all=$vip->select("select count(*) as n from vip_data");
$page_size=5;
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
$list=$vip->select("select * from vip_data order by id desc limit $start,$page_size");
$smarty->assign('vip_list',$list);


$smarty->display('vip_data.html');	
?>