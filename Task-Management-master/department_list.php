<html>
    <head>
        <title>
         Department List
        </title>
    </head>
    <table border="2">
    <tr>
        <th>Department Name</th>
        <th>Department Description</th>
<?php
// include("connection.php");
error_reporting(0);
$query="select * from department";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
echo $result['dptName']."".$result['dptDescription'];
// $result=mysqli_fetch_assoc($data);
if($total!=0){
   
        while($result=mysqli_fetch_assoc($data))
        {
        echo "
        <tr>
        <td>".$result['dptName']."</td>
        <td>".$result['dptDescription']."</td>
        ";
    }
}
else{
    echo "No records found";
}
?>
</table>
</body>
</html>