<?php
include 'db.php';
$mysort =new db('goods_sort');
$mygoods =new db('goods');
//二级分类
if(!empty($_GET['sid'])){
	$id=$_GET['sid'];
	$sort2_arr=$mysort->select("select * from goods_sort where pid='$id'");
	echo json_encode($sort2_arr);
	exit;
}
//删除
if(!empty($_GET['del_id'])){
	$id=$_GET['del_id'];
	$re=$mysort->delete("delete from goods where id='$id' limit 1");
	if($re){
		echo 1;
	}else{
		echo 0;
	}
	exit;
}

$root=$_SERVER['DOCUMENT_ROOT'].'/upload/cars/';
if(is_dir($root.'/'.date('Ym',time())) == false){
    mkdir($root.'/'.date('Ym',time()));
}
if(!empty($_FILES['photos']['tmp_name'])){
    foreach($_FILES['photos']['tmp_name'] as $k=>$v){
        $photos=date('Ym').'/'.date('YmdHis',time()).rand(0,1000).'.jpg';
        $url=$root.$photos;
        move_uploaded_file($v,$url);
        $photos_arr[$k]=$photos;
    }
}

if(!empty($_POST['old_photos'])){
	if(is_array($_POST['old_photos'])){
		$old_photos=$_POST['old_photos'];
	}
	if(!empty($photos_arr)){
		$photos_arr2=array_merge($old_photos,$photos_arr);
		$_POST['photos']=serialize($photos_arr2);
		
		
	}else{
		$_POST['photos']=serialize($old_photos);
	}
}else{
	$_POST['photos']=serialize($photos_arr);
}

unset($_POST['old_photos']);
$hid=$_POST['hid'];
unset($_POST['hid']);


if($hid>0){	
	$re=$mygoods->edit($_POST,"id='$hid'");
}else{
	$re=$mygoods->add($_POST);
}
if($re){
	echo 1;
}else{
	echo 0;
}
?>