<?php
require 'libs/Smarty.class.php'	;
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
session_start();
include('/admin/db.php');
$user = null;
if(!empty($_SESSION['vip_name'])){
    $user = $_SESSION['vip_name'];
}else{
    echo '<script>location.replace("/index.php")</script>';
}
$smarty -> assign('vip_user', $user);
/*会员资料查询*/
$vip_data = new db('vip_data');
$vip_list = $vip_data -> find("select * from vip_data where user = '$user'");
$user_id = $vip_list['id'];
$smarty -> assign('vip_list', $vip_list);

/*会员预约表查询*/
$apt = new db('vip_appointment');
$goods = new db('goods');
$apt_list = $apt -> select("select * from vip_appointment where user_id = '$user_id'");
if(!empty($apt_list)){
    foreach ($apt_list as $v){
        $id = $v['car_id'];  /*通过会员预约表查询对应预约商品*/
        $goods_list[] = $goods -> find("select * from goods where id = '$id'");
    }
    foreach ($goods_list as $k => $v){
        $goods_list[$k]['photos'] = unserialize($v['photos'])[0];
    }
    $smarty -> assign('goods_list', $goods_list);
}

/*查询分类表*/
$sort = new db('goods_sort');
$sort_list = $sort -> select("select * from goods_sort");
foreach ($sort_list as $v){
    $sort_name[$v['id']] = $v['name'];
}
$smarty -> assign('sort_name', $sort_name);

$smarty -> display("presonal_center.html");
?>