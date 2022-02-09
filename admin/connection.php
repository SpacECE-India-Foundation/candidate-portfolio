<?php
 
$conn=mysqli_connect("localhost","root","","candidate_portal");
 
//$conn=mysqli_connect("localhost","root","","candidate_portal");
$conn = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

//$conn = mysqli_connect("3.109.14.4","ostechnix","Password123#@!","candidate_portal" ) or die ("error" . mysqli_error($conn));


 
?>