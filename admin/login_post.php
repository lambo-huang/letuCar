<?php
session_start();
error_reporting(E_ERROR);
header("Content-type:text/html;charset=utf-8");	
$conn=mysqli_connect('localhost','root','','letucar');
mysqli_query($conn,'set names utf8');

$user=$_POST['user'];
$pwd=md5(md5($_POST['pwd']).'hlb');

$code=md5($_POST['code']);

if($user==''){
    echo '<script>alert("请输入用户名!");location.replace("login.php")</script>';
    exit;
}

if($pwd==''){
    echo '<script>alert("请输入用户名!");location.replace("login.php")</script>';
    exit;
}

if($code!=$_SESSION["admin_code"]){
    echo '<script>alert("验证码输入错误!");location.replace("login.php")</script>';
    exit;
}

$re=mysqli_query($conn,"select * from admin where user='$user' and pwd='$pwd'");
$row = mysqli_fetch_assoc($re);
if($row['user']==$user){
	$_SESSION['myname']=$user;
	echo '<script>location.replace("index.php")</script>';
}else{
	echo '<script>alert("用户名或密码不正确!");location.replace("login.php")</script>';
}
?>