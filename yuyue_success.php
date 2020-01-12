<?php
include('/admin/db.php');
$vip_apt = new db('vip_appointment');
$_POST['apt_num'] = time().rand(0,99999);
$_POST['apt_time'] = time();

$re = $vip_apt -> add($_POST);
if($re) echo 1;
else echo 0;

?>