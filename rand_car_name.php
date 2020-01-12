<?php
include('/admin/db.php');
$goods_sort = new db('admin');
$car_sort = $goods_sort -> select("select id, name from goods_sort order by rand() limit 5");
foreach ($car_sort as $k => $v){
    $car_sort1[$k][$v['id']] = $v['name'];
}
echo json_encode($car_sort);
