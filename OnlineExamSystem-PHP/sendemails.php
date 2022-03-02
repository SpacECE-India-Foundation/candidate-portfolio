<?php
$to_email ="khandareumesh12@gmail.com";
$subject = "Hii Ramaya";
$body = "Hi Ramaya, I use php and send you email";
$headers = "From: khandareumesh13@gmail.com";

if(mail($to_email, $subject, $body, $headers )){   echo "Email Successfully sent to $to_email";
} else {    echo "Email sending failed...";
}
?>