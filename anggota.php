<?php 
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
    exit();
}
// print_r($_SESSION);
// print_r($_COOKIE);
echo "SELAMAT DATANG"
?>