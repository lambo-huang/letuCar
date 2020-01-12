<?php
include "/admin/db.php";
$vip_data = new db('vip_data');
if(!empty($_POST['name'])){
    $data['user'] = $_POST['name'];
}
if(!empty($_POST['pwd'])){
    $data['pwd'] = md5(md5($_POST['pwd']).'hlb');
}
$res = $vip_data -> add($data);
if($res) echo 1;
else echo 0;

?>