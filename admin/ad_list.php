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
$ad =new db('ad_list');
//分页  
$all=$ad->select("select count(*) as n from ad_list where pid=0");
$page_size=1;
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

$ad_list1=$ad->select("select * from ad_list where pid=0 order by ord desc limit $start,$page_size");
$smarty->assign('ad_list1',$ad_list1);


$list=$ad->select("select * from ad_list order by ord desc");
$smarty->assign('ad_list',$list);

$smarty->display('ad_list.html');	
?>