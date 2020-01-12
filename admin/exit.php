<?php
session_start();
error_reporting(E_ERROR);
header("Content-type:text/html;charset=utf-8");	
$conn=mysqli_connect('localhost','root','','letu');
mysqli_query($conn,'set names utf8');
unset($_SESSION['myname']);
echo '<script>location.replace("login.php")</script>';
?>