<?php
//establishing connection with database.
$conn = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');
//$conn= new mysqli('localhost', 'root', '', 'candidate_portal')or die("Could not connect to mysql".mysqli_error($con));
// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

?>