<?php
include('db.php');
$db = new db('goods');
$id=$_GET['id'];
$index = $_GET['index'];
$lab = $db->find("select photos from goods where id='$id' limit 1");
$photos = unserialize($lab['photos']);

$url = 'upload/goods/'.$photos[$index];
unlink($url);
unset($photos[$index]);
$photo_arr['photos']=serialize($photos);
$re=$db->edit($photo_arr,"id='$id'");
if($re){
	echo 1;
}else{
	echo 0;
}
?>