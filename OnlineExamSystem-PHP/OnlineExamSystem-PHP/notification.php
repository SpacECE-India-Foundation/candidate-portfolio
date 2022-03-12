<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		foreach($user as $v)
		{
mysqli_query($con,"INSERT INTO `notice`( `user`, `subject`, `Description`, `Date`) VALUES ('$v','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
}

?>
create new form <form method="post">
<select name ="mail"id="mail" class="form-control">
			<?php 
	$sql=mysqli_query($con,"select role from user");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['role']."'>".$r['role']."</option>";
	}
			?>
		</select>
		<input type='button' value='save'
		onclick='save()'>;
</form>
<script>
	function save(){   
		var role=$("#mail").val();
		alert (role);
		$.ajax({    
        type: "POST",
        url:"mail.php",      
          data:{role:role},
        success: function(data){                    
        
	$('#user').append(data);
           
        }
    });
	 }</script>
<h2>new exam date</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">exam name</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">subject</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	<form action="try.php" method="post">

<p>Date From : <input type="date" name="date1" /></p>
<p>Date To: <input type="date" name="date2" /></p>
<input type="submit" name="submit" value="Submit" />
</form>

<?php

// echo("First name: " . $_POST['firstname'] . "<br />\n");

//echo("mail: " . $_POST['notice'] . "<br />\n");

//$date1Timestamp = strtotime($date1);
//$date2Timestamp = strtotime($date2);
//Calculate the difference.
//$difference = $date2Timestamp - $date1Timestamp;
//echo $difference;
?>
	<div class="row">
		<div class="col-sm-4">Select User</div>
		<div class="col-sm-5">
		<select name ="user[]" id='user' multiple="multiple" class="form-control">
		
		</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	