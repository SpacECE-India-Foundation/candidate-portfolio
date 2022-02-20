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
mysqli_query($conn,"INSERT INTO `notice`( `user`, `subject`, `Description`, `Date`) VALUES ('$v','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
}

?>
<h2>Add New Notice</h2>
<form id="form1" name="form1" action="" method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
	
	
            
                <label for="list">Select Deaprtment</label>
                <select name="department"id="department" onchange="change()"> 
                    <option value=''>-----SELECT-----</option>
                    <?php
                    $conn = mysqli_connect('localhost', 'root','','candidate_portal');
                    $result = mysqli_query($conn, 'SELECT distinct department FROM user');
                    while ($row = mysqli_fetch_assoc($result))
                    {
                      $selected = (isset($_POST['list']) && $_POST['list'] ==  $row['department']) ? 'selected' : '';
                      echo "<option value='$row[department]' $selected >$row[department]</option>";
                    }
                    ?>
                </select>
            </div>

            <div>
                <?php
                if (isset($_POST['list']))
                {
                    $result = mysqli_query($conn, 'SELECT name FROM user WHERE department=' . $_POST['list']);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo $row['name'];
                    }
                }
                ?>
            </div>
			


      

	<!-- <div class="row">
		<div class="col-sm-4">Select Department</div>
		<div class="col-sm-5">
		<select name="user[]" multiple="multiple" class="form-control">
		<select name="user2[]" multiple="multiple" class="form-control">
			 
	// $sql=mysqli_query($conn,"select  distinct department from user");
	// $r=mysqli_fetch_array($sql);
	// while($r)
	// {
	// 	echo "<option value='".$r['department']."'>".$r['department']."</option>";
	// }
	// $sql2=mysqli_query($conn,"select  name  from user where department=.$r['department']");
	// while($r1=mysqli_fetch_array($sql2))
	// {
		//echo "<option value='".$r1['name']."'>".$r1['name']."</option>";
	//}

	
			?>
		</select>
		</div>
	</div> -->






	<div class="row">
		<div class="col-sm-4">Select User</div>
		<div class="col-sm-5">
		<select name ="user[]"id="user" multiple="multiple" class="form-control">
			<?php 
	// $sql=mysqli_query($conn,"select name,uname from user");
	// while($r=mysqli_fetch_array($sql))
	// {
	// 	echo "<option value='".$r['uname']."'>".$r['name']."</option>";
	// }
			?>
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
<script>
function change(){
	var department = $('#department').val();
	//alert(department);
	$.ajax({
				url:"fetch.php",
				method:"POST",
				data:{department:department}
			}).done(function(result)

			{
				//alert(result);
				//now assign result to its related place
$("#user").html(result);
			})
	}
$(document).ready(function(){
		//jquery script
		//alert("called");
		$("#department").change(function(){
			var department = $(this).val();
			//alert(department);

			//now sending this username to ajax page for geting img saved against this username.
			// $.ajax({
			// 	url:"ajaxpage.php",
			// 	data:{data:username}
			// }).done(function(result)
			// {
			// 	//now assign result to its related place
			// 	$(".img").html(result);
			// })
		});
 
	});
	</script>