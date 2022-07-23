<html>
<body style=" background-image: url('../images/bg_9.jpg');">
<head>
   
<?php session_start();
include 'includes/connection.php';?>
<?php include './includes/header.php';?>

<?php include './includes/navbar.php';?>

<?php
if (isset($_POST['signup'])) {
require "gump.class.php";
$gump = new GUMP();
$_POST = $gump->sanitize($_POST); 

$gump->validation_rules(array(
  'name'        => 'required|alpha_space|max_len,30|min_len,5',
  'email'       => 'required|valid_email',
  'password'    => 'required|max_len,50|min_len,6',
));
$gump->filter_rules(array(
  'name'     => 'trim|sanitize_string',
  'password' => 'trim',
  'email'    => 'trim|sanitize_email',
  ));
$validated_data = $gump->run($_POST);


if($validated_data === false) {
  ?>
  <center><font color="red" > <?php echo $gump->get_readable_errors(true); ?> </font></center>
  <?php
}
else if ($_POST['password'] !== $_POST['repassword']) 
{
  echo  "<center><font color='red'>Passwords do not match </font></center>";
}
else {
 
//       $username = $validated_data['email'];
//       $checkusername = "SELECT * FROM user WHERE uname = '$username'";
//       $run_check = mysqli_query($conn , $checkusername) or die(mysqli_error($conn));
//       $countusername = mysqli_num_rows($run_check); 
//       if ($countusername > 0 ) {
//     echo  "<center><font color='red'>Username is already taken! try a different one</font></center>";
// }

$email = $validated_data['email'];
$checkemail = "SELECT * FROM user WHERE uname = '$email'";
$result = mysqli_query($conn, $checkemail);
if (mysqli_num_rows($result) > 0) {
  echo "<script>alert('Error Occured');</script>";
}else{ 
if  (isset($_FILES['f'])){
      $name = $validated_data['name'];
      $email = $validated_data['email'];
      $pass = $validated_data['password'];
      $password = md5($pass);
      $role = $_POST['role'];
      $department = $_POST['department'];
      $gender = $_POST['gender'];
      $img=$_FILES['f']['name'];
      move_uploaded_file($_FILES['f']['tmp_name'],"../images/".$_FILES['f']['name']);
      $query = "INSERT INTO user(name,uname,upass,role,department,gender,image) VALUES ('$name' , '$email', '$password' , '$role', '$department', '$gender','$img' )"; 
      $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
      if (mysqli_affected_rows($conn) > 0) { 
        $actual_link = 'http://'.$_SERVER['HTTP_HOST'];
        //the subject
        $sub = "testing mail";
        //recipient email here
        $rec = $validated_data['email'];
        //the message
        $msg = "
        <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' style='font-family:arial, 'helvetica neue', helvetica, sans-serif'> 
        <head> 
          <meta charset='UTF-8'> 
          <meta content='width=device-width, initial-scale=1' name='viewport'> 
          <meta name='x-apple-disable-message-reformatting'> 
          <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
          <meta content='telephone=no' name='format-detection'> 
          <title>New message</title><!--[if (mso 16)]>
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
              <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                <tr> 
                  <td align='center' style='padding:0;Margin:0'> 
                  <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px'> 
                    <tr> 
                      <td align='left' style='padding:0;Margin:0;padding-top:15px;padding-left:20px;padding-right:20px'> 
                      <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                        <tr> 
                          <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                          <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                            <tr> 
                              <td align='center' bgcolor='#67f623' style='padding:10px;Margin:0'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:56px;color:#333333;font-size:28px'><strong>SUCCESSFULLY REGISTERED!</strong></p></td> 
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
                              <td align='center' style='padding:0;Margin:0;padding-top:10px;padding-bottom:10px;font-size:0px'><img src='https://jpfocp.stripocdn.email/content/guids/CABINET_fc2673b5bbb9f58854737e970645649b/images/confirmation_logo.png' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic' width='100' height='100'></td> 
                            </tr> 
                            <tr> 
                              <td align='center' class='es-m-txt-c' style='padding:0;Margin:0;padding-top:15px;padding-bottom:15px'><h1 style='Margin:0;line-height:55px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:46px;font-style:normal;font-weight:bold;color:#333333'>Thanks for joining us!</h1></td> 
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
                              <td align='left' style='padding:0;Margin:0;padding-top:10px;padding-bottom:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px'>Your registration is succesfully completed.&nbsp;We are excited to get you started!<br>Following are your login details.</p></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                      </table></td> 
                    </tr> 
                    <tr> 
                      <td class='esdev-adapt-off' align='left' style='padding:20px;Margin:0'> 
                      <table cellpadding='0' cellspacing='0' class='esdev-mso-table' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:560px'> 
                        <tr> 
                          <td class='esdev-mso-td' valign='top' style='padding:0;Margin:0'> 
                          <table cellpadding='0' cellspacing='0' class='es-left' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'> 
                            <tr class='es-mobile-hidden'> 
                              <td align='left' style='padding:0;Margin:0;width:146px'> 
                              <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                <tr> 
                                  <td align='center' style='padding:0;Margin:0;display:none'></td> 
                                </tr> 
                              </table></td> 
                            </tr> 
                          </table></td> 
                          <td class='esdev-mso-td' valign='top' style='padding:0;Margin:0'> 
                          <table cellpadding='0' cellspacing='0' class='es-left' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'> 
                            <tr> 
                              <td align='left' style='padding:0;Margin:0;width:121px'> 
                              <table cellpadding='0' cellspacing='0' width='100%' bgcolor='#e8eafb' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#e8eafb;border-radius:10px 0 0 10px' role='presentation'> 
                                <tr> 
                                  <td align='right' bgcolor='#efefef' style='padding:0;Margin:0;padding-top:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px'>Login:</p></td> 
                                </tr> 
                              </table></td> 
                            </tr> 
                          </table></td> 
                          <td class='esdev-mso-td' valign='top' style='padding:0;Margin:0'> 
                          <table cellpadding='0' cellspacing='0' class='es-left' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'> 
                            <tr> 
                              <td align='left' style='padding:0;Margin:0;width:155px'> 
                              <table cellpadding='0' cellspacing='0' width='100%' bgcolor='#e8eafb' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#e8eafb;border-radius:0 10px 10px 0' role='presentation'> 
                                <tr> 
                                  <td align='left' bgcolor='#efefef' style='padding:0;Margin:0;padding-top:10px;padding-left:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px'><strong>".$validated_data['email']."</strong></p></td>  
                                </tr> 
                              </table></td> 
                            </tr> 
                          </table></td> 
                          <td class='esdev-mso-td' valign='top' style='padding:0;Margin:0'> 
                          <table cellpadding='0' cellspacing='0' class='es-right' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right'> 
                            <tr class='es-mobile-hidden'> 
                              <td align='left' style='padding:0;Margin:0;width:138px'> 
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
                    <tr> 
                      <td align='left' style='padding:0;Margin:0;padding-bottom:10px;padding-left:20px;padding-right:20px'> 
                      <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                        <tr> 
                          <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                          <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-radius:5px' role='presentation'> 
                            <tr> 
                              <td align='center' style='padding:20px;Margin:0;font-size:0'> 
                              <table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                <tr> 
                                  <td style='padding:0;Margin:0;border-bottom:0px solid #cccccc;background:unset;height:1px;width:100%;margin:0px'></td> 
                                </tr> 
                              </table></td> 
                            </tr> 
                            <tr> 
                              <td align='center' style='padding:0;Margin:0;padding-top:10px;padding-bottom:10px'><span class='es-button-border' style='border-style:solid;border-color:#2CB543;background:#46df10;border-width:0px;display:inline-block;border-radius:6px;width:auto'><a href='$actual_link/candidate-portfolio-main/user/login.php' class='es-button' target='_blank' style='mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#333333;font-size:20px;border-style:solid;border-color:#46df10;border-width:10px 30px 10px 30px;display:inline-block;background:#46df10;border-radius:6px;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-weight:normal;font-style:normal;line-height:24px;width:auto;text-align:center;border-left-width:30px;border-right-width:30px'>Go to Website</a></span></td> 
                            </tr> 
                            <tr> 
                              <td align='center' style='padding:0;Margin:0;padding-bottom:10px;padding-top:20px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#666666;font-size:14px'>Click above to get started !</p></td> 
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
                  <table class='es-footer-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:640px'> 
                    <tr> 
                      <td align='left' style='Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px'> 
                      <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                        <tr> 
                          <td align='left' style='padding:0;Margin:0;width:600px'> 
                          <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                            <tr> 
                              <td align='center' style='padding:0;Margin:0;padding-top:15px;padding-bottom:15px;font-size:0'> 
                              <table cellpadding='0' cellspacing='0' class='es-table-not-adapt es-social' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                <tr> 
                                  <td align='center' valign='top' style='padding:0;Margin:0;padding-right:40px'><img title='Facebook' src='https://jpfocp.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png' alt='Fb' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                                  <td align='center' valign='top' style='padding:0;Margin:0;padding-right:40px'><img title='Twitter' src='https://jpfocp.stripocdn.email/content/assets/img/social-icons/logo-black/twitter-logo-black.png' alt='Tw' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                                  <td align='center' valign='top' style='padding:0;Margin:0;padding-right:40px'><img title='Instagram' src='https://jpfocp.stripocdn.email/content/assets/img/social-icons/logo-black/instagram-logo-black.png' alt='Inst' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
                                  <td align='center' valign='top' style='padding:0;Margin:0'><img title='Youtube' src='https://jpfocp.stripocdn.email/content/assets/img/social-icons/logo-black/youtube-logo-black.png' alt='Yt' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td> 
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
        </html>
        ";
        $hed = 'MIME-Version: 1.0' . "\r\n";
        $hed .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        //send email
        mail($rec,$sub,$msg,$hed);


                echo "<script>alert('SUCCESSFULLY REGISTERED');
                window.location.href='login.php';</script>";

        }
}}
     // $countemail = mysqli_num_rows($run_check); 
      //echo $countemail;
//       if ($run_check  ) {
//     echo  "<center><font color='red'>Email is already taken! try a different one</font></center>";
// } else {
//   echo "count>0";
   
// //       $name = $validated_data['name'];
// //       $email = $validated_data['email'];
// //       $pass = $validated_data['password'];
// //       $password = md5($pass);
// //       $role = $_POST['role'];
// //       $course = $_POST['course'];
// //       $gender = $_POST['gender'];   
// //      // $joindate = date("F j, Y");
// //       $query = "INSERT INTO user(name,uname,upass,role,course,gender) VALUES ('$name' , '$email', '$password' , '$role', '$course', '$gender' )";
// //       echo  $query;
// // //       $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
// // //       if (mysqli_affected_rows($conn) > 0) { 
// // //         echo "<script>alert('SUCCESSFULLY REGISTERED');
// // //         window.location.href='login.php';</script>";
// //}
// // // else {
// // //   echo "<script>alert('Error Occured');</script>";
//  //}
//  }
}
}
?>
<br>

<div class="container">


      <div  class="form">
        <form id="contactform" method="POST"enctype="multipart/form-data"> 
          
          <p class="contact"><font color="white" ><label for="name">Name</font></label></p> 
          <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['name']; } ?>"> 
           
          <p class="contact"><font color="white" ><label for="email">Email</font></label></p> 
          <input id="email" name="email" placeholder="example@domain.com" required="" type="email" value="<?php if(isset($_POST['signup'])) { echo $_POST['email']; } ?>"> 
                
                <p class="contact"><font color="white" ><label for="username">Create a uname</font></label></p> 
          <input id="username" name="uname" placeholder="username" required="" tabindex="2" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['uname']; } ?>"> 
           
                <p class="contact"><font color="white" ><label for="password">Create a password</font></label></p> 
          <input type="password" id="password" name="password" required=""> 
                <p class="contact"><font color="white" ><label for="repassword">Confirm your password</font></label></p> 
          <input type="password" id="repassword" name="repassword" required=""> 
        
            <p class="contact"><font color="white" ><label for="gender">Gender </font></label></p> 
            <select class="select-style gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select><br><br>
            
            <p class="contact"><font color="white" ><label for="role">I am a..</font></label></p> 
            <select class="select-style gender" name="role">
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
            <option value="Admin">Admin</option>
            <option value="Manager">Manager</option>
            </select><br><br>
            
            <p class="contact"><font color="white" ><label for="department">Department..</font></label></p>
            <select class="select-style gender" name="department">
            <?php
            $result = mysqli_query($conn, 'select department.id,dptName from department');
                    while ($row = mysqli_fetch_assoc($result))
                    {
                      $selected = (isset($_POST['list']) && $_POST['list'] ==  $row['department']) ? 'selected' : '';
                      echo "<option value='$row[id]' $selected >$row[dptName]</option>";
                    }
                    ?>
            <!-- <option value="1">Intern(Web Development)</option>
   <option value="2">Intern(Video Editing)</option>
   <option value="3">Intern(Education-ECCE)</option>
   <option value="4">Intern(Education-Policy</option>
   <option value="5">Intern(Research)</option>
   <option value="6">Intern(Project Management)</option>
   <option value="7">Intern(Product Marketing)</option>
   <option value="8">Intern(Graphics)</option>
   <option value="9">Intern(Financial Accounting)</option>
   <option value="10">Intern(Digital Marketing)</option>
   <option value="11">Intern(HR)</option>
   <option value="12">Inetrn(Android Development)</option>
   <option value="13">Intern(LAMP Stack Development)</option>
   <option value="14">Inetrn(Cloud Computing)</option>
   <option value="15">Intern(MERN Satck Development)</option>
   <option value="16">Intern(Marketing)</option>
   <option value="17">Intern(Sales)</option>
   <option value="18">Intern(Software Testing)</option>
   <option value="19">Intern(You Tuber)</option>
   <option value="20">Intern(Data Analyst)</option>
   <option value="21">Intern(SEO)</option>
   <option value="22">Intern(UI UX Developer)</option>
   <option value="23">Intern(Proposal Writing)</option>
   <option value="24">Intern(Report Writing)</option>
   <option value="25">Intern(PHP)</option>
   <option value="26">Intern(Story Telling)</option>
   <option value="27">Intern(Blogger)</option>
   <option value="28">Intern(Social Worker)</option>
   <option value="29">Intern(Fundrasing)</option>
   <option value="30">Intern(Event Management)</option>
   <option value="31">Intern(Org Branding)</option>
   <option value="32">Intern(Curriculum Designer)</option>
   <option value="33">Intern(Business Plans)</option>
   <option value="34">Intern(Laravel Development)</option>
   <option value="35">Intern(Office Administration)</option>
   <option value="36">Intern(Cloud Network Administrator)</option>
   <option value="37">Intern(Cloud System Administration)</option>
   <option value="38">Intern(Content Writing)</option>
   <option value="40">Intern(Fashion Designing)</option>  -->
             </select><br><br>
            <p class="contact"><font color="white" ><label> Choose Your pic</font></label></p>
					<input class="form-control"  type="file" required name="f"/>
            
            <input class="buttom" name="signup" id="submit" tabindex="5" value="Sign me up!" type="submit">    
   </form> 
</div>      
</div>

</body>
</html>