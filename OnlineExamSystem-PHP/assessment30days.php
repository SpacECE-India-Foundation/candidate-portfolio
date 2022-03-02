<?php
session_start();
 include 'dbConnection.php';
$id = $_SESSION['id'];
echo $id;
$department=$_SESSION['department'];

//Fetch list of candidates compliting 30 days from joining date
$query = "SELECT * from user where uid='$id' AND DATEDIFF(CURRENT_DATE(),joindate)>30;";
 
  
 if($result->query($query)){
  //Randomly fetch assessment departmentwise
 $query=mysqli_query($conn,"SELECT * FROM assessment where department = '$department'  ORDER BY RAND() LIMIT 1" )or die('Error231');
 
if (mysqli_num_rows($query) > 0) {
  while ($row = mysqli_fetch_array($query)) {
    $assesmentid = $row['assesmentid'];
    $submitiondate = $row['submitiondate'];
    $createdate = $row['createdate'];
    $subjectname = $row['subjectname'];
    $assigmentdescription = $row['assigmentdescription'];
    $path= $row['path'];
  }
    }
}

  //allocate aasessment to above candidate

?>