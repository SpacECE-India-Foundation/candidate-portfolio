<?php

$conn = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
//$conn=mysqli_connect("localhost","root","","candidate_portal");
?>