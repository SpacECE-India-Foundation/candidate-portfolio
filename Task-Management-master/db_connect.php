<?php 

//$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($con));
$conn = mysqli_connect("3.109.14.4","ostechnix","Password123#@!","candidate_portal" ) or die ("error" . mysqli_error($conn));

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

?>