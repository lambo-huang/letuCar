<?php
include ('admin/db.php');
session_start();
unset($_SESSION['vip_name']);
echo '<script>location.replace("/index.php")</script>';
?>