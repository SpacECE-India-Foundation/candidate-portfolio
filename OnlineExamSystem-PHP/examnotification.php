<?php
include_once 'dbConnection.php';
// set the timezone first
//if(function_exists('date_default_timezone_set')) {
  //  date_default_timezone_set("Asia/Kolkata");
}

// then use the date functions, not the other way around
//$date = date("yyyy-mm-dd");
//$input = '05/10/2011 15:00:02';
//$date = strtotime($input);
//echo date('D/M/Y H:i:s', $date);

 //$date . '<br/>';
 //$date1;
$q12=mysqli_query($con,"SELECT * FROM notice")or die('Error231');
while($r=mysqli_fetch_array($sql))
	{
        sendmailto($r['user'],$r['subject'],$r['description'],$r['Date']);
	
	}
    //sendmailto(user,subject,description,Date){
        // the message
        $msg = description;

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);
        
        // send email
        mail("user","My subject",$msg);
    //}
