<?php
//var_dump($_POST);
include('../connection.php');
if(isset($_POST['department'])){
    $department=$_POST['department'];
   // echo $department;
    $result = mysqli_query($conn, "SELECT name FROM user WHERE department='$department'");
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<option value='".$row['name']."'>".$row['name']."</option>";
    }
}
if(isset($_GET['project'])){
$project=$_POST['project'];
$query="SELECT user_ids from project_list where name='$project'";
//$query="SELECT project_list.user_ids from project_list join user where project_list. name='$project' AND user.department='$department'";
//echo $query;
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{
    $id=$row['user_ids'];
    $result= explode(",", $id);
    foreach($result as $value){
        
    $result = mysqli_query($conn,"SELECT name from user WHERE `uid`='$value'" );
while ($row = mysqli_fetch_assoc($result)){


  echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
}
}
}
