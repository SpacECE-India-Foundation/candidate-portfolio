<?php
	session_start();
	//Loading class file
	include_once 'HtmlToDoc.class.php';
	$id= $_SESSION['id'];
	$query = "SELECT `file_path` FROM `documents` limit 1 ";
	$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));

	$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
 
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
	$htd = new HTML_TO_DOC();
	

	$html = '<h4>Dear '.$_SESSION['name'].',</h4>
 
	With great pleasure, I would like offer the following employment offer.<br><br>
	 
	<strong>Position</strong>: '.$_SESSION['role'].'<br><br>
	<strong>Start date: </strong>'.$date .'<br><br>
	This employment offer is contingent upon the successful completion of [background check, drug screening, reference check, I-9 form, etc.]. This offer is not a contract of employment, and either party may terminate employment at any time, with or without cause.<br><br> 
	 
	Sincerely,<br>
	 
	Sachin Mohite<br><br>
	
	 
	Candidate Signature: ______________________________ <br><br>
	 
	Candidate Printed Name: ______________________________<br>
	 
	
	</h1>';

	$htd->createDoc($html,'joiningletter',true);
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