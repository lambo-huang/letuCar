<?php
include ('db.php');
$vip_apt = new db('vip_appointment');
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $re = $vip_apt -> delete("delete  from vip_appointment where id = '$id' limit 1");
}
if ($re) echo 1;
else echo 0;
?>