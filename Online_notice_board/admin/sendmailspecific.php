<?php
include('../connection.php');
$nid=$_GET['id'];
$mailid = mysqli_query($conn, "select uname from user where uid='$nid'");
$resultid=mysqli_fetch_assoc($mailid);
//the subject
$sub = "testing mail";
//the message
$msg = "test mail";
//recipient email here
$rec = $resultid['uname'];
//send email
mail($rec,$sub,$msg);
echo"Email Successfully sent";
?>