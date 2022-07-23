<?php
include('header.php');
// session_start();
$id=isset($_GET['id'])?$_GET['id']:'';
$ud=isset($_SESSION['id'])?$_SESSION['id']:'';
// echo ($id.'--------');
// echo($ud);
$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));
$select_assignment=mysqli_query($conn,"SELECT assignment FROM `user` WHERE uid= '$ud' ");

// $number=mysqli_fetch_row($select_assignment);
//echo($number);
$application=NULL;
$assignment=NULL;
$email= $_SESSION['email'];
$query = "SELECT * FROM application WHERE email = '$email'";

$result= mysqli_query($conn , $query) or die (mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    $application=true;
	while($row=mysqli_fetch_array($select_assignment)){
		 	$assignment=$row['assignment'];
			// echo $assignment;
		 }
}

	// while($row=mysqli_fetch_array($select_assignment)){
	// 	$assignment=$row['assignment'];
	// }

if(empty($assignment)){
// echo("hello");
$a=mysqli_query($conn,"SELECT * FROM assignment WHERE position_id='$id' ORDER BY RAND() LIMIT 1" ) or die('Error231');
while($row=mysqli_fetch_array($a) )
$assignment=$row['assignment'];
// echo $assignment;
$update=mysqli_query($conn,"UPDATE user set assignment='$assignment' WHERE uid='$ud'")or die('Error231');
}

$isApplication=false;
$email=isset($_SESSION['email'])?$_SESSION['email']:'';
$query = "SELECT assignment_status FROM application WHERE email = '$email'";
$result= mysqli_query($conn , $query) or die (mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $status = $row['assignment_status'];
//    echo '----'.$status;
  // echo('<b>Download offer Letter</b> <br> <a href="../dashboard/html-to-word-php.php" class="btn btn-primary" >'.$email.'here</br></a>');   
  if($status=='complete')
    $isApplication=true;
  }
}



?>

<div class="container  ">
<title>SpaceEce</title>


	<form id="sc" method="POST"> 
<!--<div class="col-md-4">
				<label for="" class="control-label">Email</label>

				<input type="email" class="form-control" name="email" required="required">
			</div> 
			--->


<div class="card">
    <div class="card-header">Submit Assignment</div>
    <div class="card-body">
    <?php
    if($isApplication){
//      echo("done");
//        $conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));
//       $select_assignment=mysqli_query($conn,"SELECT assignment FROM `user` WHERE uid= '$ud' ");
//         $a=mysqli_query($conn,"SELECT * FROM assignment WHERE position_id='$id' ORDER BY RAND() LIMIT 1" ) or die('Error231');
//         while($row=mysqli_fetch_array($a) )
//        $assignment=$row['assignment'];
//        $update=mysqli_query($conn,"UPDATE user set assignment='$assignment' WHERE uid='$ud'")or die('Error231');

// 		$a=mysqli_query($conn,"SELECT * FROM assignment WHERE position_id='$id' ORDER BY RAND() LIMIT 1" ) or die('Error231');
//         while($row=mysqli_fetch_array($a) )
//         $assignment=$row['assignment'];
// 		$update=mysqli_query($conn,"UPDATE user set assignment='$assignment' WHERE uid='$ud'")or die('Error231');

// 		$isApplication=false;
// $email=isset($_SESSION['email'])?$_SESSION['email']:'';
// $query = "SELECT assignment_status FROM application WHERE email = '$email'";
// $result= mysqli_query($conn , $query) or die (mysqli_error($conn));

		?>
		
            <p class="lead">Assignment Submitted</a></p>
            <?php
//echo($assignment);
    }else if($assignment==NULL){
            ?>
            <p class="lead">Please fill <a href="index.php?page=home">Application</a></p>
            <?php
        }
        else{
    ?>
<p class="lead"><?php echo($assignment); ?></p>
    <input type="hidden" name="sk" id="sk" value="<?php echo($position_id=$id); ?> " >
    <div  class="row form-group">
			<div class="col-md-7">
				<!-- <label for="" class="control-label"></label> -->
				<!-- <textarea name="assignment" id="" cols="30" rows="3"  class="form-control"></textarea> -->
			</div>
		</div>
        <!-- <div style="padding:20px; padding-top:10px">
            OR
        </div> -->
        <div class="row form-group">
			<div class="input-group col-md-4 mb-3">
                <label class="btn btn-success" for="assignment">Upload Assignment</label>
			    <input type="file" id="assignment" onchange="displayfname(this,$(this))" name="assignment" accept="application/msword,text/plain, application/pdf" hidden>
		</div>
        </div>
        <input href="view.php" type="submit" value="Save" class="btn btn-primary" >
		<!--<button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>-->
        
        </form>
        </div>
  </div>

<?php } ?>



		

		<!--<a href="view.php">Next</a>--->
        <?php include('footer.php') ?>
<script>
    function displayfname(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	console.log(input.files[0].name)
        	_this.siblings('label').html(input.files[0].name);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
        $(document).ready(function(){
	$('.select2').select2({
		width:"100%",
		placeholder:'Please select here'
	})
	//$message="This is a kind reminder to submit your assignment"
	    
		 //More headers
		//$headers .= 'From: <webmaster@example.com>' . "\r\n";
		//$headers .= 'Cc: myboss@example.com' . "\r\n";
		
		//mail($to,$subject,$message,$headers);
		//if (mail($to_email, $subject, $body, $headers)) {
		//	echo "Email successfully sent to $to_email...";
		//} else {
		//	echo "Email sending failed...";
		//}
	$('#sc').submit(function(e){
		e.preventDefault()
		//start_load()
		$.ajax({
			url:'admin/ajax.php?action=save_assignment',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
                   
		    type: 'POST',
			error:err=>{
				console.log(err)
			},
			success:function(resp){
				alert('success')
				window.location.href = "index.php?page=view";
				if(resp == 1){	
					//alert_toast('Assignment successfully submitted.','success')
					setTimeout(function(){
					//	resp(success),
						

					},1000)
				}
			}
		})

	})
})
</script>

</div>