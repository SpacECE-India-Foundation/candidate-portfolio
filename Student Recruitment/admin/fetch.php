<?php
//var_dump($_POST);
include('../dashboard/includes/connection.php');
if(isset($_GET['email'])){
$email=$_POST['email'];

$query="SELECT name from user where uname='$email'";

$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

$query1 = mysqli_query($conn,"SELECT department from user WHERE `uname`='$email'" );
$row1 = mysqli_fetch_assoc($query1);
$query2 = mysqli_query($conn,"SELECT dptName from department WHERE `id`=".$row1['department']);
$row2 = mysqli_fetch_assoc($query2);
$query3 = mysqli_query($conn,"SELECT gender from user WHERE `uname`='$email'");
$row3 = mysqli_fetch_assoc($query3);
if ($row3['gender']=='m' || $row3['gender']=='M' )
{
    $row3['gender']='Male';
}
else if ($row3['gender']=='f' || $row3['gender']=='F')
{
    $row3['gender']='Female';
}
echo "<option value='".$row['name']."'>Name : ".$row['name']."</option>";
echo "<option value='".$row1['department']."'>Department : ".$row2['dptName']."</option>";
echo "<option value='".$row3['gender']."'>Gender : ".$row3['gender']."</option>";
}
