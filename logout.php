<?php 
session_start();
$_SESSION['session_username'] = "";
$_SESSION['session_password'] = "";
session_destroy();

$cookie_name = "cookie_username";
$cookie_value = "";
$time = time() - (60 * 60);
setcookie($cookie_name,$cookie_value,$time,"/");

$cookie_p = "cookie_password";
$cookie_p = "";
$time_p = time() - (60 * 60);
setcookie($cookie_p,$cookie_p,$time_p,"/");

header("location:login.php");
?>