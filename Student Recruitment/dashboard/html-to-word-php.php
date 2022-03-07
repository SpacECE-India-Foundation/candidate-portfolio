<?php
	session_start();
	//Loading class file
	include_once 'HtmlToDoc.class.php';

	//Initialize class
	$htd = new HTML_TO_DOC();

	$html = '<h1>Dear  '.$_SESSION['name'].', 
 
	With great pleasure, I would like offer the following employment offer.
	 
	Position: '.$_SESSION['role'].'
	Start date: No later than [date] 
	This employment offer is contingent upon the successful completion of [background check, drug screening, reference check, I-9 form, etc.]. This offer is not a contract of employment, and either party may terminate employment at any time, with or without cause. 
	 
	Sincerely,
	 
	[Your Signature]
	 
	'.$_SESSION['name'].'
	[Your Job Title]
	 
	Candidate Signature: ______________________________
	 
	Candidate Printed Name: ______________________________
	 
	Date: ______________________________
	
	</h1>';

	$htd->createDoc($html,'htmldoc',true);
	$myfile = fopen("offerletter/newfile.txt", "w") or die("Unable to open file!");
    $txt = $html;
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
	$to=$email;
	$file="offerletter/newfile.doc";
	$subject="Welcome to SpaceEce";
	$message="Please find your assignment below
	Assignment: Create an api";
 
	$headers .= 'From: <webmaster@example.com>' . "\r\n";
	$headers .= 'Cc: myboss@example.com' . "\r\n";
		
	mail($to,$subject,$message,$headers);

?>