<?php
include('../connection.php');
$q=mysqli_query($conn,"select * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Notice found !!!</h2>";
}
else
{
    $i=1;
    while($row=mysqli_fetch_assoc($q))
    {
        echo "<td>".$row['user']."</td>\r\n";
        //the subject
        $sub = "Notice Alert";
        //the message
        $msg = $row['Description'];
        //recipient email here
        $rec = $row['user'];
        //send email
        mail($rec,$sub,$msg);
        echo"Email Successfully sent\r\n";
        $i++;
    }
    
}
?>