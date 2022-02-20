<?php
//var_dump($_POST);
include('../connection.php');
if(isset($_POST['department'])){
    $department=$_POST['department'];
    $result = mysqli_query($conn, "SELECT name FROM user WHERE department='$department'");
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<option value='".$row['name']."'>".$row['name']."</option>";
    }
}
