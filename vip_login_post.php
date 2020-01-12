<?php
session_start();
include('/admin/db.php');
$vip_data = new db('vip_data');
if(!empty($_POST['user'])){
    $user = $_POST['user'];
}
if(!empty($_POST['pwd'])){
    $pwd = md5(md5($_POST['pwd']).'hlb');
}
if(!empty($_POST['code'])){
    $code = md5($_POST['code']);
}

if($user == ''){
    echo 'user_null';
    exit;
}
if($pwd==''){
    echo 'pwd_null';
    exit;
}
if($code!=$_SESSION["vip_code"]){
    echo 'code_error';
    exit;
}
$re = $vip_data -> find("select * from vip_data where user = '$user' and pwd = '$pwd'");
//$row = mysqli_fetch_assoc($re);$row['user'] == $user;
if(!empty($re)){
    $_SESSION['vip_name'] = $user;
    echo 1;
}else{
    echo 0;
}
?>