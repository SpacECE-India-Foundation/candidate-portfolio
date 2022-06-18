<?php

$conn = mysqli_connect('localhost', 'root',"",'candidate_portal' ) or die ("error" . mysqli_error($conn));

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
//$conn=mysqli_connect("localhost","root"."","candidate_portal");
?>