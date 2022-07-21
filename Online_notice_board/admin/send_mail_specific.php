<?php 
$q=mysqli_query($conn,"select * from user ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function send_mail(id)
	{
		if(confirm("You want to mail this person ?"))
		{
		window.location.href="sendmailspecific.php?id="+id;
		}
	}
</script>
<h2 style="color:#00FFCC">All Users</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Send Mail</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['uname']."</td>";
?>

<Td><a href="javascript:send_mail('<?php echo $row['uid']; ?>')" style='color:green'><span class='glyphicon glyphicon-envelope'></span></a></td><?php 

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>