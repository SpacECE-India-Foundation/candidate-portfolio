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
$sql=mysqli_query($conn,"select * from admin where pass='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	
	$sql=mysqli_query($conn,"update admin set pass='$np' where user='$admin'");
	
	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New  password not matched with Confirm Password </font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

?>
<h2 align="center">Update Password</h2>
<form method="post">
<table class="table table-bordered">
<Tr>
<Td colspan="2" align="center">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><font size="4ppx"><?php echo @$err;?></div>
	</div>
	</Tr>
	
	<Tr>
	<div class="row">
	<td><div class="col-sm-4">Enter Your Old Password</div></td>
	<div class="col-sm-5">
		<td><input type="password" name="op" class="form-control"/></div></td>
	</div>
	</Tr>
	<Tr>
	<div class="row">
	<td><div class="col-sm-4">Enter Your New Password</div></td>
	<div class="col-sm-5">
	<td>	<input type="password" name="np" class="form-control"/></div></td>
	</div>
	</Tr>
	<Tr>
	<div class="row">
	<td><div class="col-sm-4">Confirm Your New Password</div></td>
		<div class="col-sm-5">
		<td><input type="password" name="cp" class="form-control"/></div></td>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		</Tr>
		<Tr>
		<Td colspan="2" align="center">
		<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
	</Tr>
</form>	