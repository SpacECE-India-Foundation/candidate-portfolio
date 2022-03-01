<?php 
 include_once 'dbConnection.php';

	$sql=mysqli_query($con,"select * from user join notice where user.uname=notice.user");
	while($r=mysqli_fetch_array($sql))
{
	// print_r ($r );
     sendmailto($r['uname'],$r['subject'],$r['description'],$r['Date']);

	}
    sendmailto($uname,$subject,$msg){
    
        if(mail($uname,$subject,$msg)){
            echo "SENT";
        }else{
            echo "Error";
        }
    /}
}
			?>
