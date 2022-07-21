<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$op=md5($op);
	// echo"SELECT * FROM `user` WHERE upass='".$op."'";
	// $sql=mysqli_query($conn,"SELECT * FROM `user` WHERE upass='".$op."'"); 
$sql=mysqli_query($conn,"SELECT * FROM `user` WHERE name= '".$_SESSION['name']."'");

$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$mailid = mysqli_query($conn,"SELECT uname FROM `user` WHERE name= '".$_SESSION['name']."'");
	$resultid=mysqli_fetch_assoc($mailid);	
	$np=md5($np);
	$sql=mysqli_query($conn,"update user set upass='$np' where uname='$user'");
	$sub="PASSWORD UPDATED";
	$msg="YOUR PASSWORD HAS BEEN SUCCESSFULLY UPDATED";
	$rec=$resultid['uname'];
	mail($rec,$sub,$msg);
	
	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New password not matched with Confirm Password </font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

?>
<h2>Update Password</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Your Old Password</div>
		<div class="col-sm-5">
		<input type="password" name="op" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Your New Password</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Confirm Your New Password</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	