<?php
include ('/admin/db.php');
$vip = new  db('vip_data');

/*预约列表删除*/
$apt_list = new db('vip_appointment');
if(!empty($_GET['car_id'])){
    $car_id = $_GET['car_id'];
    $apt_list -> delete("delete from vip_appointment where car_id = '$car_id' limit 1");
    echo '<script>location.replace("/presonal_center.php")</script>';
    exit;
    die();
}

/*个人资料编辑*/
unset($_POST['pp']);
unset($_POST['cc']);
unset($_POST['aa']);
$id = $_POST['id'];
unset($_POST['id']);


$ROOT = $_SERVER['DOCUMENT_ROOT'].'/upload/admin/';
if(is_dir($ROOT.'/'.date('Ym')) == false){
    mkdir($ROOT.'/'.date('Ym'));
}

if(empty($_POST['old_photo'])){
    $photo = date('Ym').'/'.date('YmdHis',time()).rand(0,999).'.jpg';
}else{
    $photo = $_POST['old_photo'];
}
$url = $ROOT.$photo;
move_uploaded_file($_FILES['photo']['tmp_name'],$url);
$_POST['photo'] = $photo;

if(empty($_POST['pwd'])){
    $pwd = $_POST['old_pwd'];
}else{
    $pwd = md5(md5($_POST['pwd']).'hlb');
}
$_POST['pwd'] = $pwd;
unset($_POST['old_photo']);
unset($_POST['old_pwd']);

$re = $vip -> edit($_POST, "id = '$id'");
if($re) echo '<script>location.replace("/presonal_center.php")</script>';



?>