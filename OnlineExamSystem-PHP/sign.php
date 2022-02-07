<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$uname = $_POST['email'];
$college = $_POST['college'];
$mob = $_POST['mob'];
$upass = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$uname = stripslashes($uname);
$uname = addslashes($uname);
$college = stripslashes($college);
$college = addslashes($college);
$mob = stripslashes($mob);
$mob = addslashes($mob);

$upass = stripslashes($password);
$upass = addslashes($password);
$upass = md5($password);

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$gender' , '$college','$uname' ,'$mob', '$password')");
if($q3)
{
session_start();
$_SESSION["uname"] = $uname;
$_SESSION["name"] = $name;

header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>