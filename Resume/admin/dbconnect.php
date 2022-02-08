<?php

	//$link=mysqli_connect("localhost","root","","candidate_portal") or die("Error: connecting database.".mysqli_connect_error());
	$link = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');

// Check connection
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: " . $link->connect_error;
    exit();
}

?>