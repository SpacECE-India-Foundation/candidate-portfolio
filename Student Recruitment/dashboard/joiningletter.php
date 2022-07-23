<?php
	session_start();
	//Loading class file
	// include_once 'HtmlToDoc.class.php';
	require_once('TCPDF-main/tcpdf.php');
	$id= $_SESSION['id'];
	$query = "SELECT `file_path` FROM `documents` limit 1 ";
	$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));

	$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
 
	$query1=mysqli_query($conn,"select dptName from department where id=".$_SESSION['department']);
	$dpt=mysqli_fetch_assoc($query1);
	$query2=mysqli_query($conn,"select joindate from user where uid=".$id);
	$joindate=mysqli_fetch_assoc($query2);
	$query3=mysqli_query($conn,"select enddate from user where uid=".$id);
	$enddate=mysqli_fetch_assoc($query3);
	$query4=mysqli_query($conn,"select contact from application where email='".$_SESSION['uname']."'");
	$contact=mysqli_fetch_assoc($query4);
	$date= date('Y-m-d');
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		if(isset($row['file_path'])){
			$date=explode('_',$row['file_path'])[0];
			if($date)
			$date=date('Y-m-d',$date);
			else
			$date= date('Y-m-d');
		}
		
	}

	//Initialize class
	// $htd = new HTML_TO_DOC();
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	// $pdf->SetFooterData('www.spacece.co | +91 90903 05648 | internship@spacece.co');
	// $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	$pdf->SetMargins(20, 20, 20);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	// add a page
	$pdf->AddPage();
	

	$html = '<!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title>Gaurav Kamalakar Pohane - Joining Letter - 7558555354</title><style type="text/css"> * {margin:0; padding:0; text-indent:0; }
	 h1 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: underline; font-size: 28pt; }
	 .s2 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: underline; font-size: 28pt; }
	 h2 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 24pt; }
	 p { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 16pt; margin:0pt; }
	 h3 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 16pt; }
	</style></head><body><h1 style="padding-top: 2pt;padding-left: 96pt;text-indent: 0pt;text-align: center;">Spac<span style=" color: #FFBF00;"></span>E<span style=" color: #FFBF00;">CE</span><span class="s2"> </span>Internship</h1><h2 style="padding-left: 96pt;text-indent: 0pt;text-align: center;">JOINING LETTER</h2>
	<p style="padding-top: 14pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">Congratulations!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                     Date: '.$date.'</p>
	<h3 style="padding-top: 12pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">'.$_SESSION['name'].'</h3>
	<p style="text-indent: 0pt;text-align: left;"><br/></p>
	<p style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;">We welcome you to the organization. You are joining as the <b>'.$dpt['dptName'].' </b>at <b>SpaceECE</b>. The duration of this engagement is from <b>'.$joindate['joindate'].' to '.$enddate['enddate'].'</b>.</p>
	<p style="padding-top: 10pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;">As such, your internship will include training/orientation and will be focused primarily on learning and developing new skills and also gain a practical implementation in your domain.</p>
	<p style="padding-top: 10pt;padding-left: 5pt;text-indent: 0pt;text-align: justify;">Location – Work from Home</p>
	<p style="text-indent: 0pt;text-align: left;"><br/></p>
	<p style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;">We look forward to your joining the team and wish you a long and fulfilling career with the organization.</p>
	<p style="text-indent: 0pt;text-align: left;"><br/></p>
	<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Sincerely,</p>
	<p style="text-indent: 0pt;text-align: left;"><br/></p>
	<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span><img width="157" height="30" alt="image" src="C:\xampp\htdocs\candidate-portfolio-main\Student Recruitment\dashboard\Image_001.jpg"/></span></p>

	<h3 style="padding-top: 12pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Sachin Mohite</h3>
	<h3 style="padding-top: 12pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Internship Head, SpaceECE</h3></body></html>
	';

	// $htd->createDoc($html,'joiningletter',true);
	// $myfile = fopen("offerletter/newfile.txt", "w") or die("Unable to open file!");
    // $txt = $html;
    // fwrite($myfile, $txt);
    // $txt = "Jane Doe\n";
    // fwrite($myfile, $txt);
    // fclose($myfile);
	// $to=$email;
	// $file="offerletter/newfile.doc";
	// $subject="Welcome to SpaceEce";
	// $message="Please find your assignment below
	// Assignment: Create an api";
 
	// $headers .= 'From: <webmaster@example.com>' . "\r\n";
	// $headers .= 'Cc: myboss@example.com' . "\r\n";
		
	// mail($to,$subject,$message,$headers);

	$pdf->lastPage();
	$pdf->writeHTML($html, true, false, true, false, '');
	// reset pointer to the last page
	//Close and output PDF document
	//$pdf->Output('JoiningLetter-'.$_SESSION['name'].'-+''.pdf', 'I');
	$pdf->Output('JoiningLetter-'.$_SESSION['name'].'-'.$contact['contact'].'.pdf', 'I');

	// $fname='JoiningLetter_'.$_SESSION['name'];

	// $pdf = tempnam( '/tmp', 'generated-joiningletter' );


	// exec( "wkhtmltopdf   $pdf" );

	// header('Content-Type: application/pdf');
	// header('Content-Disposition: attachment; filename=joiningletter.pdf');

	// echo file_get_contents( $html );
	// unlink( $pdf );


?>

