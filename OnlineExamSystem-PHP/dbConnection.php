<?php
//all the variables defined here are accessible in all the files that include this one
//$con= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($con));
$con = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');

// Check connection
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

?>