<?php
include ('db.php');
$vip =new db('vip_data');
if(!empty($_GET['id'])){

    $id=$_GET['id'];

    $data['pwd']=md5(md5('123456').'hlb');
    $re=$vip->edit($data,"id='$id'");
}

if($re){
    echo 1;
}else{
    echo 0;
}
?>