<?php
require 'libs/Smarty.class.php'	;
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include "admin/db.php";

/*会员表查询*/
$vip_data = new db('vip_data');
session_start();
$user = null;
if(!empty($_SESSION['vip_name'])){
    $user = $_SESSION['vip_name'];
}
$smarty -> assign('vip_user', $user);
$vip = $vip_data -> find("select * from vip_data where user = '$user'");
$user_id = $vip['id'];
$smarty -> assign('vip', $vip);

/*会员预约表查询*/
$vip_apt = new db('vip_appointment');
$apt_list = $vip_apt -> select("select * from vip_appointment where user_id = '$user_id'");
$apt_car_id = [];
if(!empty($apt_list)){
    foreach($apt_list as $k => $v){
        $apt_car_id[$k] = $v['car_id'];
    }
}
$smarty -> assign("apt_car_id", $apt_car_id);
$smarty -> assign('apt_list', $apt_list);

$where = 'where 1';
/*首页搜索*/
if(!empty($_GET['sort_id'])){
    $sort_id = $_GET['sort_id'];
    $where .= " and sort_id = '$sort_id'";
}
/*if(!empty($_GET['name'])){
    $name = $_GET['name'];
    $where .= " and about like '%$name%'";
}*/

/*价格筛选*/
if(!empty($_GET['price'])){
    $price = $_GET['price'];
    switch ($price){
        case 1: $where .= " and price <= 2"; break;
        case 2: $where .= " and price > 2 and price <= 3"; break;
        case 3: $where .= " and price > 3 and price <= 5"; break;
        case 4: $where .= " and price > 5 and price <= 7"; break;
        case 5: $where .= " and price > 7 and price <= 9"; break;
        case 6: $where .= " and price > 9 and price <= 12"; break;
        case 7: $where .= " and price > 12 and price <= 15"; break;
        case 8: $where .= " and price > 15 and price <= 20"; break;
        case 9: $where .= " and price > 20 and price <= 30"; break;
        case 10: $where .= " and price > 30"; break;
    }
    $smarty -> assign('price', $price);
}
/*品牌筛选*/
if(!empty($_GET['sid'])){
    $sort_id = $_GET['sid'];
    $where .= " and sort_id = '$sort_id'";
    $smarty -> assign('sid', $sort_id);
}

/*汽车分类*/
$goods_sort = new db('goods_sort');

$car_sort = $goods_sort -> select("select * from  goods_sort where ord >= 0");
$smarty -> assign('car_icon', $car_sort);
foreach ($car_sort as $k => $v){
    $car_sort[$v['id']] = $v['name'];
    $car_icon[$v['id']] = $v['photo'];
}
$smarty -> assign('car_sort', $car_sort);
$smarty -> assign('car_icon2', $car_icon);
/*查询商品表*/
$goods = new db('goods');
$cars = $goods -> select("select * from goods $where order by id desc");
//echo "select * from goods $where order by id desc";
if(!empty($cars)){
    foreach ($cars as $k => $v){
        $cars[$k]['photos'] = unserialize($v['photos']);
    }
}

$smarty -> assign('cars', $cars);

$smarty -> display("list.html");
?>