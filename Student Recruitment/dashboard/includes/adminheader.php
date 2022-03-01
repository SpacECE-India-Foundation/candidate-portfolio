<?php
session_start();
include('connection.php');
if (isset($_SESSION['role'])) {
	
}
else {
    echo "<script>alert('you need to login first');
    window.location.href='../index.php';</script>";	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - <?php echo $_SESSION['username']; ?></title>
    
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <script src="dashboard/js/tinymce/tinymce.min.js"></script>
    <script src="dashboard/js/tinymce/script.js"></script>
    
    <link href="dashboard/css/sb-admin.css" rel="stylesheet">

</head>

<body>