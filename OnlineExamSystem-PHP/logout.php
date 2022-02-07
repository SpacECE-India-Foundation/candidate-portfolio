<?php 
session_start();
if(isset($_SESSION['uname'])){
session_destroy();}
$ref= @$_GET['q'];
header("location:$ref");
?>