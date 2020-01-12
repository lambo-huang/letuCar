<?php
include('db.php');
$ad=new db('ad_list');
//删除
if($_GET['del_id']){
	$id=$_GET['del_id'];
	$del=$ad->find("select * from ad_list where id='$id'");
	if($del['pid']==0){
		echo 2;
	}else{
		$re=$ad->delete("delete from ad_list where id='$id' limit 1");
			if($re){
				echo 1;
			}else{
				echo 0;
			}
	}	
	exit;
}
$hid=$_POST['hid'];
//图片
$ext=null;
switch($_FILES['photos']['type']){
	case 'image/jpeg':$ext='.jpg';break;
	case 'image/gif':$ext='.gif';break;
	case 'image/png':$ext='.png';break;
	default:$ext='.jpg';
}


$root=$_SERVER['DOCUMENT_ROOT'].'/upload/ad_list/';

if(is_dir($root.'/'.date('Ym',time())) == false){
    mkdir($root.'/'.date('Ym',time()));
}

if(!empty($_POST['old_photo'])){
    $photo=$_POST['old_photo'];
}else{
    $photo=date('Ym').'/'.date('YmdHis',time()).rand(0,1000).$ext;
}

$url=$root.$photo;
move_uploaded_file($_FILES['photo']['tmp_name'],$url);
$_POST['photo']=$photo;

unset($_POST['hid']);
unset($_POST['old_photo']);
unset($_POST['photos']);


/*var_dump($_POST);
die();*/
if($hid>0){
	$re=$ad->edit($_POST,"id='$hid'");
}else{
	$re=$ad->add($_POST);
}
if($re){
	echo 1;
}else{
	echo 0;
}
?>