<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include 'db_connect.php';
include('header.php');
if (isset($_POST['submit'])){

$name  = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['number'];
$photo = $_FILES['Upload_Image']['tmp_name'];
$address = $_POST['comment'];
$gender = $_POST['gender'];
$dob = $_POST['date'];
$hometown = $_POST['Home_town'];
$state = $_POST['State'];
$idproof = $_FILES['filename']['tmp_name'];



// header('Location: downloadprejoin.php');


$query="INSERT INTO `details`(`name`,`email`,`number`,`Upload_Image`, `comment`, `gender`, `date`, `Home_town`, `State`, `filename`) VALUES 
('$name','$email','$mobile','$photo','$address','$gender','$dob','$hometown','$state','$idproof')";
 $result = mysqli_query($conn , $query) or die (mysqli_error($conn)); 
$query = "SELECT * FROM details WHERE name = '$name'";

$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
//the subject
$sub = "PRE JOINING FORM";
//recipient email here
$rec = $_SESSION['uname'];
//the message
$msg = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' style='font-family:arial, 'helvetica neue', helvetica, sans-serif'> 
 <head> 
  <meta charset='UTF-8'> 
  <meta content='width=device-width, initial-scale=1' name='viewport'> 
  <meta name='x-apple-disable-message-reformatting'> 
  <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
  <meta content='telephone=no' name='format-detection'> 
  <title>Joining Letter</title><!--[if (mso 16)]>
    <style type='text/css'>
    a {text-decoration: none;}
    </style>
    <![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <style type='text/css'>
#outlook a {
	padding:0;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
[data-ogsb] .es-button {
	border-width:0!important;
	padding:10px 30px 10px 30px!important;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120%!important } h1 { font-size:36px!important; text-align:left } h2 { font-size:26px!important; text-align:left } h3 { font-size:20px!important; text-align:left } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:36px!important; text-align:left } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important; text-align:left } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important; text-align:left } .es-menu td a { font-size:12px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:14px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:14px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:14px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class='gmail-fix'] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:20px!important; display:inline-block!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0!important } .es-m-p0r { padding-right:0!important } .es-m-p0l { padding-left:0!important } .es-m-p0t { padding-top:0!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } .es-m-p5 { padding:5px!important } .es-m-p5t { padding-top:5px!important } .es-m-p5b { padding-bottom:5px!important } .es-m-p5r { padding-right:5px!important } .es-m-p5l { padding-left:5px!important } .es-m-p10 { padding:10px!important } .es-m-p10t { padding-top:10px!important } .es-m-p10b { padding-bottom:10px!important } .es-m-p10r { padding-right:10px!important } .es-m-p10l { padding-left:10px!important } .es-m-p15 { padding:15px!important } .es-m-p15t { padding-top:15px!important } .es-m-p15b { padding-bottom:15px!important } .es-m-p15r { padding-right:15px!important } .es-m-p15l { padding-left:15px!important } .es-m-p20 { padding:20px!important } .es-m-p20t { padding-top:20px!important } .es-m-p20r { padding-right:20px!important } .es-m-p20l { padding-left:20px!important } .es-m-p25 { padding:25px!important } .es-m-p25t { padding-top:25px!important } .es-m-p25b { padding-bottom:25px!important } .es-m-p25r { padding-right:25px!important } .es-m-p25l { padding-left:25px!important } .es-m-p30 { padding:30px!important } .es-m-p30t { padding-top:30px!important } .es-m-p30b { padding-bottom:30px!important } .es-m-p30r { padding-right:30px!important } .es-m-p30l { padding-left:30px!important } .es-m-p35 { padding:35px!important } .es-m-p35t { padding-top:35px!important } .es-m-p35b { padding-bottom:35px!important } .es-m-p35r { padding-right:35px!important } .es-m-p35l { padding-left:35px!important } .es-m-p40 { padding:40px!important } .es-m-p40t { padding-top:40px!important } .es-m-p40b { padding-bottom:40px!important } .es-m-p40r { padding-right:40px!important } .es-m-p40l { padding-left:40px!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; max-height:inherit!important } }
</style> 
 </head> 
 <body style='width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'> 
  <div class='es-wrapper-color' style='background-color:#FAFAFA'><!--[if gte mso 9]>
			<v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
				<v:fill type='tile' color='#fafafa'></v:fill>
			</v:background>
		<![endif]--> 
   <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#FAFAFA'> 
     <tr> 
      <td valign='top' style='padding:0;Margin:0'> 
       <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
         <tr> 
          <td class='es-info-area' align='center' style='padding:0;Margin:0'> 
           <table class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px' bgcolor='#FFFFFF'> 
             <tr> 
              <td align='left' style='padding:20px;Margin:0'> 
               <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr> 
                  <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                   <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr> 
                      <td align='center' style='padding:0;Margin:0;display:none'></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding='0' cellspacing='0' class='es-header' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'> 
         <tr> 
          <td align='center' style='padding:0;Margin:0'> 
           <table bgcolor='#ffffff' class='es-header-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'> 
             <tr> 
              <td align='left' style='Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px'> 
               <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr> 
                  <td class='es-m-p0r' valign='top' align='center' style='padding:0;Margin:0;width:560px'> 
                   <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr> 
                      <td align='center' style='padding:0;Margin:0;font-size:0px'><img src='https://jrhptb.stripocdn.email/content/guids/CABINET_f7e26899fd4de983a37600b5570ba798/images/org_logo.png' alt='Logo' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;font-size:12px' width='150' title='Logo' height='150'></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
         <tr> 
          <td align='center' style='padding:0;Margin:0'> 
           <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px'> 
             <tr> 
              <td align='left' style='Margin:0;padding-top:15px;padding-left:20px;padding-right:20px;padding-bottom:30px'> 
               <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr> 
                  <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                   <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr> 
                      <td align='center' class='es-m-txt-c' bgcolor='#f1c232' style='padding:10px;Margin:0'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:54px;color:#333333;font-size:36px'>Welcome to the Organization</p></td> 
                     </tr> 
                     <tr> 
                      <td align='center' style='padding:20px;Margin:0;font-size:0'> 
                       <table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                         <tr> 
                          <td style='padding:0;Margin:0;border-bottom:0px solid #cccccc;background:unset;height:1px;width:100%;margin:0px'></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr> 
                      <td align='left' class='es-m-p0r es-m-p0l es-m-txt-l' style='Margin:0;padding-top:10px;padding-bottom:10px;padding-left:40px;padding-right:40px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px'>Hello ".$name."!<br><br>As you are aware that you are selected as Intern (Cloud Computing) and today is your joining date. We welcome you to the world of enthusiastic learners.<br><br>1. <strong>Communication Channels</strong><br>Please join the WhatsApp group prepared for all employees and interns.<br><a href='https://chat.whatsapp.com/J4yZ9cS4phV1NCS' target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#5C68E2;font-size:14px'>https://chat.whatsapp.com/J4yZ9cS4phV1NCS</a><br><br>You can also join the Departmental WhatsApp Group by clicking on the following link.<br><br><br>2. <strong>Confirmation of Semester Internship</strong><br>If you are applying for the Semester Internship then you are expected to complete the following Semester Internship Enrolment Form. Please complete the formalities as early as possible.<br><a href='https://forms.gle/XbAW5xeKFAbML2ud9' target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#5C68E2;font-size:14px'>https://forms.gle/XbAW5xeKFAbML2ud9</a><br><br>You will need a permission letter from your department. Please refer to the following format for the same.<br><a href='https://docs.google.com/document/d/e/2PACX-1vQChHnEQLa49le3VJ6LPHyTQoVHOVpC05qdwd5LE3X6R9LB7sSwnHXYmygoQI4DheI3-lYaLsYu8iJr/pub' target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#5C68E2;font-size:14px'>https://docs.google.com/document/d/e/2PACX-1vQChHnEQLa49le3VJ6LPHyTQoVHOVpC05qdwd5LE3X6R9LB7sSwnHXYmygoQI4DheI3-lYaLsYu8iJr/pub</a><br><br>Please take note that all these details will be verified by your department. Therefore, make sure that all details are accurate<br><br>Welcome again!!!<br><br>Thanks and Regards,<br>Talent Acquisition<br>+91 9096305648</p><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px'><a href='mailto:hr@spacece.co' target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#5C68E2;font-size:14px'>hr@spacece.co</a></p></td> 
                     </tr> 
                     <tr> 
                      <td align='center' style='padding:20px;Margin:0;font-size:0'> 
                       <table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                         <tr> 
                          <td style='padding:0;Margin:0;border-bottom:0px solid #cccccc;background:unset;height:1px;width:100%;margin:0px'></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding='0' cellspacing='0' class='es-footer' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'> 
         <tr> 
          <td align='center' style='padding:0;Margin:0'> 
           <table class='es-footer-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'> 
             <tr> 
              <td align='left' style='Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px'> 
               <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr> 
                  <td align='left' style='padding:0;Margin:0;width:560px'> 
                   <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr> 
                      <td align='center' style='padding:0;Margin:0;padding-top:15px;padding-bottom:15px;font-size:0'> 
                       <table cellpadding='0' cellspacing='0' class='es-table-not-adapt es-social' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                         <tr> 
                          <td align='center' valign='top' style='padding:0;Margin:0;padding-right:40px'><img title='Facebook' src='https://jrhptb.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png' alt='Fb' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                          <td align='center' valign='top' style='padding:0;Margin:0;padding-right:40px'><img title='Twitter' src='https://jrhptb.stripocdn.email/content/assets/img/social-icons/logo-black/twitter-logo-black.png' alt='Tw' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                          <td align='center' valign='top' style='padding:0;Margin:0;padding-right:40px'><img title='Instagram' src='https://jrhptb.stripocdn.email/content/assets/img/social-icons/logo-black/instagram-logo-black.png' alt='Inst' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                          <td align='center' valign='top' style='padding:0;Margin:0'><img title='Youtube' src='https://jrhptb.stripocdn.email/content/assets/img/social-icons/logo-black/youtube-logo-black.png' alt='Yt' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
         <tr> 
          <td class='es-info-area' align='center' style='padding:0;Margin:0'> 
           <table class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px' bgcolor='#FFFFFF'> 
             <tr> 
              <td align='left' style='padding:20px;Margin:0'> 
               <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                 <tr> 
                  <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                   <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                     <tr> 
                      <td align='center' class='es-infoblock' style='padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#CCCCCC;font-size:12px'><a target='_blank' href='' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px'></a>No longer want to receive these emails?&nbsp;<a href='' target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px'>Unsubscribe</a>.<a target='_blank' href='' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px'></a></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table></td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>";
$hed = 'MIME-Version: 1.0' . "\r\n";
$hed .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//send email
mail($rec,$sub,$msg,$hed);
?>
<script>
  window.location.href = "index.php?page=joining_letter";
</script>
<?php 
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $photo = $row['Upload_Image'];
    $address = $row['comment'];
    $gender = $row['gender']=$gender;
    $dob = $row['date'];
    $hometown = $row['Home_town'];
    $state = $row['State'];
    $idproof =$row['filename'];

      // $_SESSION['id'] = $id;
      // $_SESSION['name'] = $name;
      // $_SESSION['email']= $email;
      // $_SESSION['Upload_Images'] = $photo;
      // $_SESSION['comment']  = $address;
      // $_SESSION['gender']=$gender;
      // $_SESSION['date'] = $dob;
      // $_SESSION['Home_town'] = $hometown;
      // $_SESSION['State']=$state;
      // $_SESSION['filename']=$idproof;
  }
  }
}
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $mobile = $dob = $hometown = $state = $idpfoot ="";
$name = $email = $gender = $address = $mobile  = $dob = $hometown = $state = $idpfoot ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["mobile"])) {
    $mobile = "Mobile is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    
  }

  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  echo("hello");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html lang="en">
  <style>
.error {color: #FF0000;}
.container{
  padding-top:20px;
}
</style>
</head>

<body>

<div class="container">
  <div class="card">
    <div class="card-header">
    <h3 class="text-black bg-light">Pre Joining Form </h3>
    </div>
    <div class="card-body">
    <p><span class="error">* required field</span></p>
<form method="post" action="<?php echo 'index.php?page=joining_letter';//htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype='multipart/form-data'>  
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="<?php echo $_SESSION['name']?>" readonly>
    <small class="form-text text-muted error"><?php echo $nameErr;?></small>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $_SESSION['email']?>" readonly>
      <small class="form-text text-muted error"><?php echo $emailErr;?></small>
    </div>
    <!-- <div class="form-group col-md-6"> -->
      <!-- <label for="mobile">Mobile no.:</label> -->
      <input type="hidden" name="mobile" class="form-control" id="mobile" placeholder="Mobile No." value="+91 9673793866" readonly >
      <input type="hidden" name="number" class="form-control" id="mobile" placeholder="Mobile No." value="+91 9673793866" readonly >
      <!-- <small class="form-text text-muted error"><?php echo $mobile;?></small> -->
    <!-- </div> -->
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="control-label" for="Upload_Image">Photo:</label>
      <input type="file" name="Upload_Image" id="Upload_Image" placeholder="Upload image">
    </div>
    <div class="form-group col-md-6">
      <label for="comment">Address:</label>
      <textarea class="form-control" name="comment" rows="5" cols="40" id="comment" placeholder="Address"></textarea>
      <small class="form-text text-muted error"><?php echo $mobile;?></small>
    </div>
  </div>

  <div class="form-row">
    <div class="form-check col-md-6">
      <label >Gender:</label><br>
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") //echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") //echo "checked";?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") //echo "checked";?> value="other">Other
    </div>
    <div class="form-group col-md-6">
      <label for="dob">DOB:</label>
      <input type="date" Name="date" class="form-control" id="dob">      
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="city">City:</label>
      <input type="city" Name="Home_town" class="form-control" id="city">      
    </div>
    <div class="form-group col-md-4">
      <label for="State">State:</label>
      <input type="state" Name="State" class="form-control" id="State">      
    </div>
    <div class="form-group col-md-4">
      <label class="control-label" for="myFile">ID Proof:</label><br>
      <input type="file" id="myFile" name="filename"/> 
    </div>
  </div>

    <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="reset" value="Submit" class="btn btn-secondary">Reset</button>

   <!-- <input type="text" name="name" value="<?php //echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span> -->
  <!-- <br><br>
  E-mail: <input type="text" name="email" value="<?php //echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  mobile no.: <input type="text" name="number" value="<?php //echo $mobile;?>">
  <span class="error"><?php echo $mobile;?></span>
  <br><br> -->
  <!-- photo: <input type="file" value="Upload_Image" name="Upload_Image" <?php //echo $photo;?>>
  <br><br>
  Address: <textarea name="comment" rows="5" cols="40"><?php //echo $address;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") //echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") //echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") //echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  DOB: <input type="date" Name="date">
  <br><br>
  Home town: <input type="city" Name="Home_town">
  <br><br>
  State: <input type="state" Name="State">
  <br><br>
  ID proof: <input type="file" id="myFile" name="filename">
  <br><br> -->
  
  <!-- <input type="submit" name="submit" value="Submit" > <br>  -->

  <!--<b>Download Joining Letter</b> <br> <a href="../dashboard/html-to-word-php.php" class="btn btn-primary" >Download here</br></a>-->
              	
</form>
    </div>
  </div>
</div>
</body>
</html>
