<html>
<body>
<?php include ('includes/connection.php'); ?>
<?php include('includes/adminheader.php');  ?>


 <div id="wrapper">
       
       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome 
                            <small><?php echo $_SESSION['name']; ?></small>
                        </h1>
<?php if($_SESSION['role'] == 'admin') {
?>
<h3 class="page-header">
                        <center> Assignment  </center>
                        </h3>
    
		</div>
<div class="row">
<div class="col-lg-12">
        <div class="table-responsive">

<form action="" method="post">
            <table class="table table-bordered table-striped table-hover">


            <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Type </th>
                        <th>Uploaded on</th>
                        <th>Uploaded by </th>
                        <th>Status</th>
                        <th>View</th>
                        <th>Approve</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody>

                 <?php

$query = "SELECT * FROM upload ORDER BY file_uploaded_on DESC";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $file_id = $row['file_id'];
    $file_name = $row['file_name'];
    $file_description = $row['file_description'];
    $file_type = $row['file_type'];
    $file_date = $row['file_uploaded_on'];
    $file_uploader = $row['file_uploader'];
    $file_status = $row['status'];
    $file = $row['file'];

    echo "<tr>";
    echo "<td>$file_name</td>";
    echo "<td>$file_description</td>";
    echo "<td>$file_type</td>";
    echo "<td>$file_date</td>";
    echo "<td><a href='viewprofile.php?name=$file_uploader' target='_blank'> $file_uploader </a></td>";
    echo "<td>$file_status</td>";
    echo "<td><a href='allfiles/$file' target='_blank' style='color:green'>View </a></td>";
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to approve this note?')\"href='?approve=$file_id'><i class='fa fa-times' style='color: red;'></i>Approve</a></td>";

    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this post?')\" href='?del=$file_id'><i class='fa fa-times' style='color: red;'></i>delete</a></td>";

    echo "</tr>";

}
}
?>


                </tbody>
            </table>
</form>
</div>
</div>
</div>
<?php 
}

    ?>

    
                
			  

 <h3 class="page-header">
                            <center>  <font color="green" >  <?php echo $_SESSION['name']; ?></font><font color="brown">Thank you for submmiting assignment </font> </center>
                        </h3>

                    </div>
                </div>
<div class="row">
<div class="col-lg-12">
        <div class="table-responsive">

<form action="" method="post">
            <table class="table table-bordered table-striped table-hover">


            <thead>
            
                    <tr>
                         
                        
                    <td><b>Click To Upload Documents and download offer letter</b> <br> <a href="admin/Documents.php" class="btn btn-primary" >Download here</br></a></td>
                        <th><b>Prejoing process</b><br> <a href="admin/prejoing form.php" class="btn btn-primary" >Complete Prejoing procedure</br></a></th>
                        
                        
                    </tr>
                </thead>
                <tbody>

                 <?php
                 $currentusercourse = $_SESSION['course'];

 
?>
  </tbody>
            </table>
</form>
</div>
</div>
</div>
<?php 
 
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="js/jquery.js"></script>

  
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
</html>

<script> function change() {

      var formData = new FormData();
      formData.append('file', $('#document')[0].files[0]);
       
       
  

      let file = $("#document")[0].files[0]; 
     // file.name
      alert(file.name);
  // code here CAN use carName


  

$.ajax({
			url:'admin/ajax.php?action=documents',
            
            
            data : formData,
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    async: false,
            
            contentType: false,
            enctype: 'multipart/form-data',
			error:err=>{
				console.log(err)
			},
			success:function(resp){
                alert(resp);
            }
        })
}
    </script>
