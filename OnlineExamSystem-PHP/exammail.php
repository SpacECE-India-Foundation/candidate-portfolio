<?php 
 include_once 'dbConnection.php';

	$sql=mysqli_query($con,"select * from user join notice where user.uname=notice.user");
	while($r=mysqli_fetch_array($sql))
{
	 print_r ($r );
     sendmailto($r['uname'],$r['subject'],$r['description'],$r['Date']);

	}
    sendmailto("user","My subject",$msg){
        // the message
      

        // use wordwrap() if lines are longer than 70 characters
        
        
        // send email
        mail("user","My subject",$msg);
    }
			?>
