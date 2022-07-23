<?php
//$conn = new mysqli('localhost', 'root', '', 'candidate_portal');$conn = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');
// Check connection
$conn = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

