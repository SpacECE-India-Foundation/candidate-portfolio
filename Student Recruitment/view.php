<?php
// include('./admin/Documents.php');
?>
<!-- <h1>View Application Status</h1>

<div >
<a><input type="submit"  href="html-to-word-php.php" name="login" class="btn btn-primary" value="login">Download offer letter</a>
<a href=" view.php">Next</a>
</div> -->

<?php
//include('../header.php');
// include('db_connect.php');
$id= $_SESSION['id'];
$query = "SELECT `assignment` FROM `user` WHERE `uid`=".$id;

$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));

$result1 = mysqli_query($conn , $query) or die (mysqli_error($conn));

$isApplication=false;
$email=isset($_SESSION['email'])?$_SESSION['email']:'';
$query = "SELECT assignment_status FROM application WHERE email = '$email'";
$result= mysqli_query($conn , $query) or die (mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $status = $row['assignment_status'];
    //echo '----'.$status;
  // echo('<b>Download offer Letter</b> <br> <a href="../dashboard/html-to-word-php.php" class="btn btn-primary" >'.$email.'here</br></a>');   
  if($status=='complete')
    $isApplication=true;
  }
}

//echo $isApplication;
if(!$isApplication){
?>
    <div class="container">
    <div class="card">
        <div class="card-header">
            Download Offer Letter
        </div>
        <div class="card-body">
        <p>Please submit your <a href="index.php?page=applications">assignment</a> to download the Joining Letter </p>
        </div>
    </div>
</div>

<?php
}else if (mysqli_num_rows($result1) > 0 && mysqli_fetch_array($result1)['assignment']) {
    $_SESSION['id']=$id;
    include('./admin/Documents.php')
  ?>
    <!-- <div class="container">
        <div class="card">
            <div class="card-header">
                Download Offer Letter
            </div>
            <div class="card-body">
                <a href="./admin/Documents.php" class="btn btn-primary btn-sm">Download</a>
            </div>
        </div>
    </div> -->
  <?php
}else{
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Offer Letter
            </div>
            <div class="card-body">
                <p>Please submit your <a href="index.php?page=applications">assignment</a> to download the Offer Letter </p>
            </div>
        </div>
    </div>
    <?php
}
?>


