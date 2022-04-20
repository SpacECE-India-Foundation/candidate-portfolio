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
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		
	
	
            
                <label for="list">Select Deaprtment</label>
                <select name="department"id="department" onchange="change()"> 
                    <option value=''>-----SELECT-----</option>
                    <?php
                   // $conn = mysqli_connect('localhost', 'root','','candidate_portal');
                    // $result = mysqli_query($conn, 'SELECT distinct department FROM user');
                    // while ($row = mysqli_fetch_assoc($result))
                    // {
                    //   $selected = (isset($_POST['list']) && $_POST['list'] ==  $row['department']) ? 'selected' : '';
                    //   echo "<option value='$row[department]' $selected >$row[department]</option>";
                    // }
					$result = mysqli_query($conn, 'select department.id,dptName from department');
                    while ($row = mysqli_fetch_assoc($result))
                    {
                      $selected = (isset($_POST['list']) && $_POST['list'] ==  $row['department']) ? 'selected' : '';
                      echo "<option value='$row[id]' $selected >$row[dptName]</option>";
                    }
                    ?>

                </select>
            </div>

            <div>
                <?php
                if (isset($_POST['list']))
                {
                    $result = mysqli_query($conn, 'SELECT * FROM user JOIN department WHERE user.department=department.id and user.department=' . $_POST['list']);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo $row['name'];
                    }
                }
                ?>
            </div>

            <div <div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
			<label for="list">Select project</label>
                <select name="project"id="project" onchange="call_function()"> 
                    <option value=''>-----SELECT-----</option>
                    <?php
                   // $conn = mysqli_connect('localhost', 'root','','candidate_portal');
                    $result = mysqli_query($conn, 'SELECT distinct name FROM project_list');
                    while ($row = mysqli_fetch_assoc($result))
                    {
                      $selected = (isset($_POST['list']) && $_POST['list'] ==  $row['name']) ? 'selected' : '';
                      echo "<option value='$row[name]' $selected >$row[name]</option>";




                    }
                    ?>
                </select>
            </div>

            <div>
                <?php
                if (isset($_POST['list']))
                {
					$result = $conn->query("SELECT *,concat(name) as name FROM user where uid in ($user_ids) order by concat(name) asc");
                    // $result = mysqli_query($conn, 'SELECT user_ids FROM project_list WHERE user_ids=' . $_POST['list']);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo $row['name'];
                    }
                }
                ?>
            </div>
			</div>



			
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
			
		});
 
	});


	</script>
	<script>
		function call_function(){
		//alert("inside");
		var project = $('#project').val();
		$("#user").empty();
	$.ajax({
				url:"fetch.php?project",
				method:"POST",
				data:{project:project}
			}).done(function(result)

			{
				//alert(result);
				//now assign result to its related place
$("#user").html(result);
			})
			
	}
		</script>
	