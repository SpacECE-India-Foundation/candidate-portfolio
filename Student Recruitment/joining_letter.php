<?php
//include('../header.php');
// include('db_connect.php');
$id= $_SESSION['id'];
$conn = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');
$query = "SELECT `assignment` FROM `user` WHERE `uid`=".$id;
//$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));

$result1 = mysqli_query($conn , $query) or die (mysqli_error($conn));

$email= $_SESSION['email'];
$query = "SELECT * FROM details WHERE email = '$email'";

$result2 = mysqli_query($conn , $query) or die (mysqli_error($conn));

$isApplication=false;
$email=isset($_SESSION['email'])?$_SESSION['email']:'';
$query = "SELECT assignment_status FROM application WHERE email = '$email'";
$result= mysqli_query($conn , $query) or die (mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $status = $row['assignment_status'];
  // echo('<b>Download offer Letter</b> <br> <a href="../dashboard/html-to-word-php.php" class="btn btn-primary" >'.$email.'here</br></a>');   
  if($status!='uncomplete')
    $isApplication=true;
  }
}

if(!$isApplication){
?>
    <div class="container">
    <div class="card">
        <div class="card-header">
            Download Joining Letter
        </div>
        <div class="card-body">
        <p>Please submit your <a href="index.php?page=applications">assignment</a> to download the Joining Letter </p>
        </div>
    </div>
</div>

<?php
}else if (mysqli_num_rows($result2) > 0) {
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            View Joining Letter
        </div>
        <div class="card-body">
        <a href="./dashboard/joiningletter.php" class="btn btn-primary" >View Joining Letter</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
            Send Joining Letter on email
        </div>
        <div class="card-body">
        <a href="./dashboard/sendonemail.php" class="btn btn-primary" >Send on Email</a>
        </div>
    </div>
</div>
<?php
}else if (mysqli_num_rows($result1) > 0  && mysqli_fetch_array($result1)['assignment']) {
include('./admin/prejoing_form.php')
?>
<!-- <div class="container">
    <div class="card">
        <div class="card-header">
            Download Joining Letter
        </div>
        <div class="card-body">
            <a href="./admin/prejoing_form.php" class="btn btn-primary btn-sm">Download</a>
        </div>
    </div>
</div> -->
<?php }else{ ?>
    <div class="container">
    <div class="card">
        <div class="card-header">
            Download Joining Letter
        </div>
        <div class="card-body">
        <p>Please submit your <a href="index.php?page=applications">assignment</a> to download the Joining Letter </p>
        </div>
    </div>
</div>
<?php } ?>

<?php

