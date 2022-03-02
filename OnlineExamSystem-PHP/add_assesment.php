<?php
session_start();
$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));
    
if (isset($_POST['submit'])) {
    //$assesmentid = $_POST['assesmentid'];
    $submitiondate = $_POST['submitiondate'];
    $createdate = $_POST['createdate'];
    $subjectname = $_POST['subjectname'];
    $assigmentdescription = $_POST['assigmentdescription'];
    $path= $_POST['path'];
    $department= $_POST['department'];
$query=mysqli_query($conn,"INSERT INTO `assessment`(`submitiondate`, `createdate`, `subjectname`, `assigmentdescription`, `path`,`department`) VALUES ('$submitiondate','$createdate','$subjectname','$assigmentdescription','$path','$department')");
}

?>
 <form id="contactform" method="POST"enctype="multipart/form-data"> 
          
          <p class="contact"><label for="submitiondate">submitiondate</label></p> 
          <input id="submitiondate" name="submitiondate" placeholder="filled submitiondate" required="" tabindex="1" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['name']; } ?>"> 
           
          <p class="contact"><label for="createdate">Createdate</label></p> 
          <input date="createdate" placeholder="filled date" required="" id="createdate" name="createdate" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['email']; } ?>"> 
                
                <p class="contact"><label for="subjectname">subjectname</label></p> 
          <input id="subjectname" name="subjectname" placeholder="subjectname" required="" tabindex="2" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['username']; } ?>"> 
           
                <p class="contact"><label for="assigmentdescription">assigmentdescription</label></p> 
          <input type="text" id="assigmentdescription" name="assigmentdescription" placeholder="description" required=""> 
                
          <p class="contact"><label for="path">path</label></p> 
          <input type="path" id="path" placeholder="path" name="path" required=""><br>
          <select name ="department"id="department" class="form-control">
			<?php 
	$sql=mysqli_query($conn,"select dptName from department");
	while($r=mysqli_fetch_array($sql))
	{
		//ToDo:handle department id
		echo "<option value='".$r['dptName']."'>".$r['dptName']."</option>";
	}
    ?>
          <input class="buttom" name="submit" id="submit" tabindex="5" value="click on me" type="submit">