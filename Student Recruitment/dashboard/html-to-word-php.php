<?php
	session_start();
	//Loading class file
	// include_once 'HtmlToDoc.class.php';
	require_once('TCPDF-main/tcpdf.php');
	$id= $_SESSION['id'];
	$query = "SELECT `file_path` FROM `documents` limit 1 ";
	$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));
	$query1=mysqli_query($conn,"select dptName from department where id=".$_SESSION['department']);
	$dpt=mysqli_fetch_assoc($query1);
	$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
	$query2=mysqli_query($conn,"select joindate from user where uid=".$id);
	$joindate=mysqli_fetch_assoc($query2);
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
	

	// $html = 
	// '<p style="text-align: center;"><span style="font-size: 28px;"><span style="color: rgb(0, 0, 0);"><strong><u>SPAC</u></strong></span><span style="color: rgb(250, 197, 28);"><strong><u>Ǝ</u></strong></span><strong><u>E</u></strong><span style="color: rgb(250, 197, 28);"><strong><u>CE</u></strong></span><span style="color: rgb(0, 0, 0);"><strong><u>&nbsp;</u></strong></span><u><strong>Internship</strong></u></span></p>
	// <p style="text-align: center;"><span style="font-size: 24px;"><strong>OFFER LETTER</strong></span></p>
	// <p><span style="font-size: 16px;">Congratulations! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Date:'.$date.'</span></p>
	// <p>'.$_SESSION['name'].'</p>
	// <p><span style="font-size: 16px;">We are pleased to inform you that you have been selected as the '.$dpt['dptName'].' for <strong>SpaceECE</strong>. Your tenure will start from '.$joindate['joindate'].'.</span></p>
	// <p><span style="font-size: 16px;">&nbsp;As such, your internship will include training/orientation and will be focused primarily on learning and developing new skills and also gain a practical implementation in your domain.</span></p>
	// <p><span style="font-size: 16px;">Location &ndash; Work from Home</span></p>
	// <p><span style="font-size: 16px;">We look forward to your joining the team and wish you a long and fulfilling career with the organization.</span></p>
	// <p><span style="font-size: 16px;">Sincerely,</span></p>
	// <p><span style="font-size: 16px;"><img src="data:image/png;base64,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" style="width: 175px;"></span></p>
	// <p><span style="font-size: 16px;">____________________</span></p>
	// <p><span style="font-size: 16px;"><strong>Sachin Mohite</strong></span></p>
	// <p><span style="font-size: 16px;"><strong>Internship Head, SpaceECE</strong></span></p>
	// <p><br></p>';
	// '              <strong>SPACƎECE Internship
	//                              OFFER LETTER</strong>
	// <h4>Congragulations '.$_SESSION['name'].',</h4>
	// We are pleased to inform you that you have been selected as the '.$dpt['dptName'].' for <strong>SpaceECE</strong>. Your tenure will start from '.$date.'.
 
	// With great pleasure, I would like offer the following employment offer.<br><br>
	 
	// <strong>Position</strong>: '.$_SESSION['role'].'<br><br>
	// <strong>Start date: </strong>'.$date .'<br><br>
	// This employment offer is contingent upon the successful completion of [background check, drug screening, reference check, I-9 form, etc.]. This offer is not a contract of employment, and either party may terminate employment at any time, with or without cause.<br><br> 
	 
	// Sincerely,<br>
	 
	// Sachin Mohite<br><br>
	
	 
	// Candidate Signature: ______________________________ <br><br>
	 
	// Candidate Printed Name: ______________________________<br>
	 
	
	// </h1>';

	// $htd->createDoc($html,'offerletter-'.$_SESSION['name'].'-'.$_SESSION['mobile'].'',true);
	// $myfile = fopen("offerletter/newfile.pdf", "w") or die("Unable to open file!");
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
	//-------------------------------------HTML TO PDf------------------------------------------------- 

	// create new PDF document
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	// set document information
	// $pdf->SetCreator(PDF_CREATOR);
	// $pdf->SetAuthor('Your Blog Coach');
	// $pdf->SetTitle('Heading');

	// set default header data
	// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

	// set header and footer fonts
	// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	// $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	// $pdf->SetMargins(20, 20, 20);
	// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	// $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	// $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	// add a page
	$pdf->AddPage();

	$html = '
	<p style="text-align: center;"><span style="font-size: 28px;"><span style="color: rgb(0, 0, 0);"><strong><u>Spac</u></strong></span><strong><u>E</u></strong><span style="color:#FFC000;"><strong><u>CE</u></strong></span><span style="color: rgb(0, 0, 0);"><strong><u>&nbsp;</u></strong></span><u><strong>Internship</strong></u></span></p>
	<p style="text-align: center;"><span style="font-size: 24px;"><strong>OFFER LETTER</strong></span></p>
	<p><span style="font-size: 16px;">Congratulations!&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Date:'.$date.'</span></p>
	<p><span style="font-size: 16px;">'.$_SESSION['name'].'</span></p>
	<p><span style="font-size: 16px;">We are pleased to inform you that you have been selected as the '.$dpt['dptName'].' for <strong>SpaceECE</strong>. Your tenure will start from '.$joindate['joindate'].'.</span></p>
	<p><span style="font-size: 16px;">As such, your internship will include training/orientation and will be focused primarily on learning and developing new skills and also gain a practical implementation in your domain.</span></p>
	<p><span style="font-size: 16px;">Location &ndash; Work from Home</span></p>
	<p><span style="font-size: 16px;">We look forward to your joining the team and wish you a long and fulfilling career with the organization.</span></p>
	<p><span style="font-size: 16px;">Sincerely,</span></p>
	<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span><img width="157" height="30" alt="image" src="C:\xampp\htdocs\candidate-portfolio-main\Student Recruitment\dashboard\Image_001.jpg"/></span></p>
	<p><span style="font-size: 16px;">____________________</span></p>
	<p><span style="font-size: 16px;"><strong>Sachin Mohite</strong></span></p>
	<p><span style="font-size: 16px;"><strong>Internship Head, SpaceECE</strong></span></p>
	<p><br></p>';
	 
	$pdf->writeHTML($html, true, false, true, false, '');
	
        // add a page
	// $pdf->AddPage();

	// $file_path_pdf='\\OfferLetter-'.$_SESSION['name'].'-'.$contact['contact'].'.pdf';
	// $pdf->writeHTML($html, true, false, true, false, '');

	// reset pointer to the last page
	//Close and output PDF document
	// echo __DIR__.$file_path_pdf;
	// $pdf->Output(__DIR__.$file_path_pdf, 'F');
	$pdf->Output('OfferLetter-'.$_SESSION['name'].'-'.$contact['contact'].'.pdf', 'I');

	


?>