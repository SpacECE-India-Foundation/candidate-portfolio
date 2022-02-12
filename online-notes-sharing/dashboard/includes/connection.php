<?php
//$conn = mysqli_connect("localhost","root","","candidate_portal" ) or die ("error" . mysqli_error($conn));
$con = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');

// Check connection
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

