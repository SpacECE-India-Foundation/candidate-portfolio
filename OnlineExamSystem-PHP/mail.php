<?php 
 include_once 'dbConnection.php';

	$sql=mysqli_query($con,"select name,uname from user");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['uname']."'>".$r['uname']."</option>";
	}
			?>