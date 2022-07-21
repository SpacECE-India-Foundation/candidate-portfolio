<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * from system_settings limit 1");
if($qry->num_rows > 0){
	foreach($qry->fetch_array() as $k => $val){
		$meta[$k] = $val;
	}
}
 ?>

<div class="container-fluid">
    <div>
	<div class="card col-lg-12">
		<div class="card-body">
			<form action="" id="manage-settings">
    <div class="col-sm-4"></div>
		<div class="col-sm-8">
			<label for="list">Select Applicant Email : </label>
                <select name="email"id="email" onchange="call_function()"> 
                    <option value=''>-----SELECT-----</option>
                    <?php
                   // $conn = mysqli_connect('localhost', 'root','','candidate_portal');
                    $result = mysqli_query($conn, "SELECT email FROM application where assignment_status='complete'");
                    while ($row = mysqli_fetch_assoc($result))
                    {
                      $selected = (isset($_POST['list']) && $_POST['list'] ==  $row['email']) ? 'selected' : '';
                      echo "<option value='$row[email]' $selected >$row[email]</option>";
                    }
                    ?>
                </select>
            </div>
			
			</select>
            </div>
	<div class="container-fluid">
		<div class="col-sm-0">User Details</Details></div>
		<div class="col-sm-7">
		<select name ="user[]"id="user" multiple="multiple" class="form-control">
			<?php 
			?>
		</select>
		</div>
	</div>		

<div class="form-group col-md-6">
      <label for="dob">Join Date:</label>
	  <option value=''>Enter Date in (YYYYMMDD) Format</option>
      <input type="text" Name="startdate" class="form-control" id="dob" >      
    </div>
    <div class="form-group col-md-6">
      <label for="dob">End Date:</label>
	  <option value=''>Enter Date in (YYYYMMDD) Format</option>
      <input type="text" Name="enddate" class="form-control" id="dob">      
    </div>
				<center>
					<button class="btn btn-info btn-primary btn-block col-md-2">Save</button>
				</center>
			</form>
		</div>
	</div>
	<style>
	img#cimg{
		max-height: 10vh;
		max-width: 6vw;
	}
</style>

<script>
	$('.text-jqte').jqte();

	$('#manage-settings').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_joinandend',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			error:err=>{
				console.log(err)
			},
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.','success')
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})

	})
</script>
<script>
		function call_function(){
		//alert("inside");
		var email = $('#email').val();
		$("#user").empty();
	$.ajax({
				url:"fetch.php?email",
				method:"POST",
				data:{email:email}
			}).done(function(result)

			{
				//alert(result);
				//now assign result to its related place
$("#user").html(result);
			})
			
	}
		</script>
<style>
	
</style>
</div>