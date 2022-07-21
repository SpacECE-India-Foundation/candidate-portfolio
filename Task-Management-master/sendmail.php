<?php
//the subject
$sub = "testing mail";
//the message
$msg = "test mail";
//recipient email here
$rec = "agarwalparth786@gmail.com";
//send email
mail($rec,$sub,$msg);
echo"Success Email Sent.";
?>