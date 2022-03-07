<?php
//$conn = mysqli_connect("localhost","root","","candidate_portal" ) or die ("error" . mysqli_error($conn));
$conn= new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal' )or die("Could not connect to mysql".mysqli_error($con));
?>
