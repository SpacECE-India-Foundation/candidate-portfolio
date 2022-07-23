<?php
	session_start();
	//Loading class file
	// include_once 'HtmlToDoc.class.php';
	require_once('TCPDF-main/tcpdf.php');
	$id= $_SESSION['id'];
	$query = "SELECT `file_path` FROM `documents` limit 1 ";
	$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));

	$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
	$query1=mysqli_query($conn,"select department from exit_form where email='".$_SESSION['uname']."'");
	$dpt=mysqli_fetch_assoc($query1);
	$query2=mysqli_query($conn,"select start_date from exit_form where email='".$_SESSION['uname']."'");
	$joindate=mysqli_fetch_assoc($query2);
	$query3=mysqli_query($conn,"select end_date from exit_form where email='".$_SESSION['uname']."'");
	$enddate=mysqli_fetch_assoc($query3);
	$query4=mysqli_query($conn,"select project_title from exit_form where email='".$_SESSION['uname']."'");
	$project=mysqli_fetch_assoc($query4);
	$query5=mysqli_query($conn,"select contact from application where email='".$_SESSION['uname']."'");
	$contact=mysqli_fetch_assoc($query5);

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
	

	// $html = '<h4>Dear '.$_SESSION['name'].',</h4>
    // Date: '.$date .'<br><br>
    


 
	
	// <strong>Position</strong>: intern <br><br>
	// <strong>End Date: </strong>'.$date .'<br><br>
	// This is to certify that '.$_SESSION['name'].'  has done his internship in  at SpacEce, Bangalore, from '.$date.' to '.$date .'.

    // He/She has worked on a project wonderfully. 
    
    // During his/her internship he/she has demonstrated his/her skills with self-motivation to learn new skills. His/Her performance exceeded our expectations and he/she was able to complete the project on time.
    
    // We wish him/her all the best for his/her upcoming career.
    // .<br><br> 
	 
	// Sincerely,<br>
	 
	// Sachin Mohite<br><br>
	
	 
	// Candidate Signature: ______________________________ <br><br>
	 
	// Candidate Printed Name: ______________________________<br>
	 
	
	// </h1>';

	// $htd->createDoc($html,'completionletter',true);
	// $myfile = fopen("offerletter/newfile.txt", "w") or die("Unable to open file!");
    // $txt = $html;
    // fwrite($myfile, $txt);
    // $txt = "Jane Doe\n";
    // fwrite($myfile, $txt);
    // fclose($myfile);
	// $to=$_SESSION['uname'];
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
	$html='
	<p style="text-align: center;"><span style="font-size: 28px;"><u>Spac</u></span><span style="font-size: 28px;"><u>E</u></span><span style="color: rgb(255, 192, 0); font-size: 28px;"><u>CE</u></span><span style="font-size: 28px;"><u>&nbsp;Internship</u></span></p>
	<p style="text-align: center;"><span style="font-size: 24px;">COMPLETION LETTER </span></p>
	<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong><span style="font-size: 16px;">Date: '.$date.'</span></strong></p>
	<p style="text-align: center;"><strong><span style="font-size: 16px;">TO WHOMSOEVER IT MAY CONCERN</span></strong></p>
	<p><span style="font-size: 16px;">This is to certify that <strong>'.$_SESSION['name'].'</strong> has done an internship in <strong>'.$dpt['department'].'</strong> <strong>as</strong> at <strong>SpaceECE</strong>, Pune, from <strong>'.$joindate['start_date'].'</strong> to <strong>'.$enddate['end_date'].'</strong>.</span></p>
	<p><span style="font-size: 16px;">During this highly engaging SpacECE Internship Program, candidates had been exposed to many processes. The candidate worked on project titled '.$project['project_title'].' and as part of the project, all responsibilities were completed successfully. We found that candidate was diligent, hard-working and inquisitive.</span></p>
	<p><span style="font-size: 16px;">We wish <strong>'.$_SESSION['name'].'</strong> every success in career and life!</span></p>
	<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span><img width="157" height="30" alt="image" src="C:\xampp\htdocs\candidate-portfolio-main\Student Recruitment\dashboard\Image_001.jpg"/></span></p>
	<p><span style="font-size: 16px;">____________________</span></p>
	<p><span style="font-size: 16px;"><strong>Sachin Mohite</strong></span></p>
	<p><span style="font-size: 16px;"><strong>Internship Head, SpaceECE</strong> </span></p>
	<p><br></p>';
	$pdf->writeHTML($html, true, false, true, false, '');
	// reset pointer to the last page
	//Close and output PDF document
	$pdf->Output('CompletionLetter-'.$_SESSION['name'].'-'.$contact['contact'].'.pdf', 'I');

?>