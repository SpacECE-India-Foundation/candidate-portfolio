<?php
session_start();

ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

	function login(){
		extract($_POST);
		$qry = $this->db->query("SELECT * FROM users where username = '".$username."' and password = '".$password."' ");
		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'passwors' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
				return 1;
		}else{
			return 3;
		}
	}
	function login2(){
		extract($_POST);
		$qry = $this->db->query("SELECT * FROM users where username = '".$email."' and password = '".md5($password)."' ");
		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'passwors' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
				return 1;
		}else{
			return 3;
		}
	}
	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:login.php");
	}
	function logout2(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:../index.php");
	}

	function save_user(){
		extract($_POST);
		$data = " name = '$name' ";
		$data .= ", username = '$username' ";
		$data .= ", password = '$password' ";
		$data .= ", type = '$type' ";
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users set ".$data);
		}else{
			$save = $this->db->query("UPDATE users set ".$data." where id = ".$id);
		}
		if($save){
			return 1;
		}
	}
	function signup(){
		extract($_POST);
		$data = " name = '$name' ";
		$data .= ", contact = '$contact' ";
		$data .= ", address = '$address' ";
		$data .= ", username = '$email' ";
		$data .= ", password = '".md5($password)."' ";
		$data .= ", type = 3";
		$chk = $this->db->query("SELECT * FROM users where username = '$email' ")->num_rows;
		if($chk > 0){
			return 2;
			exit;
		}
			$save = $this->db->query("INSERT INTO users set ".$data);
		if($save){
			$qry = $this->db->query("SELECT * FROM users where username = '".$email."' and password = '".md5($password)."' ");
			if($qry->num_rows > 0){
				foreach ($qry->fetch_array() as $key => $value) {
					if($key != 'passwors' && !is_numeric($key))
						$_SESSION['login_'.$key] = $value;
				}
			}
			return 1;
		}
	}

	function save_settings(){
		extract($_POST);
		$data = " name = '".str_replace("'","&#x2019;",$name)."' ";
		$data .= ", email = '$email' ";
		$data .= ", contact = '$contact' ";
		$data .= ", about_content = '".htmlentities(str_replace("'","&#x2019;",$about))."' ";
		if($_FILES['img']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
						$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/img/'. $fname);
					$data .= ", cover_img = '$fname' ";

		}
		
		// echo "INSERT INTO system_settings set ".$data;
		$chk = $this->db->query("SELECT * FROM system_settings");
		if($chk->num_rows > 0){
			$save = $this->db->query("UPDATE system_settings set ".$data);
		}else{
			$save = $this->db->query("INSERT INTO system_settings set ".$data);
		}
		if($save){
		$query = $this->db->query("SELECT * FROM system_settings limit 1")->fetch_array();
		foreach ($query as $key => $value) {
			if(!is_numeric($key))
				$_SESSION['setting_'.$key] = $value;
		}

			return 1;
				}
	}

	
	function save_recruitment_status(){
		extract($_POST);
		$data = " status_label = '$status_label' ";
		if(empty($id)){
			$save = $this->db->query("INSERT INTO recruitment_status set ".$data);
		}else{
			$save = $this->db->query("UPDATE recruitment_status set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_recruitment_status(){
		extract($_POST);
		$delete = $this->db->query("UPDATE recruitment_status set status = 0 where id = ".$id);
		if($delete)
			return 1;
	}
	function save_vacancy(){
		extract($_POST);
		$data = " position = '$position' ";
		$data .= ", availability = '$availability' ";
		$data .= ", description = '".htmlentities(str_replace("'","&#x2019;",$description))."' ";
		if(isset($status))
		$data .= ", status = '$status' ";
		
		if(empty($id)){
			
			$save = $this->db->query("INSERT INTO vacancy set ".$data);
		}else{
			$save = $this->db->query("UPDATE vacancy set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_vacancy(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM vacancy where id = ".$id);
		if($delete)
			return 1;
	}
	function save_application($lastname,$firstname,$middlename,$address,$contact,$email,$gender,$cover_letter,$position_id,$resume){
		//extract($_POST);
		// $data = " lastname = '$lastname' ";
		// $data .= ", firstname = '$firstname' ";
		// $data .= ", middlename = '$middlename' ";
		// $data .= ", address = '$address' ";
		// $data .= ", contact = '$contact' ";
		// $data .= ", email = '$email' ";
		// $data .= ", gender = '$gender' ";
		// $data .= ", cover_letter = '".htmlentities(str_replace("'","&#x2019;",$cover_letter))."' ";
		// $data .= ", position_id = '$position_id' ";
		if(isset($status))
		//$data .= ", process_id = '$status' ";
		

		if($_FILES['resume']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['resume']['name'];
						$move = move_uploaded_file($_FILES['resume']['tmp_name'],'./'. $fname);
					$resume1 = $fname;

		}else{
			$resume1 = null;
		}
		// if(empty($id)){
		// 	// echo "INSERT INTO application set ".$data;
		// 	// exit;

		
		$save = $this->db->query("INSERT INTO application ('$lastname','$firstname','$middlename','$address','$contact','$email','$gender','$cover_letter','$position_id')");
		echo $save;
		
		// }else{
		//	$save = $this->db->query("UPDATE application set ".$data." where id=".$id);
		//}
		if($save)
	//	$headers = "MIME-Version: 1.0" . "\r\n";
	//	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		//$message="Please find your assignment below
	    //Assignment: Create an api";
		 //More headers
		//$headers .= 'From: <webmaster@example.com>' . "\r\n";
		//$headers .= 'Cc: myboss@example.com' . "\r\n";
		
		//mail($to,$subject,$message,$headers);
		//if (mail($to_email, $subject, $body, $headers)) {
		//	echo "Email successfully sent to $to_email...";
		//} else {
		//	echo "Email sending failed...";
		//}
			return 1;
	}
	function delete_application(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM application where id = ".$id);
		if($delete)
			return 1;
	}

	function save_assignment(){
		extract($_POST);
		
		$data .= ", email = '$email' ";
		
		$data .= ", assignment = '".htmlentities(str_replace("'","&#x2019;",$assignment))."' ";
		
		if($_FILES['assignment']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['assignment']['name'];
						$move = move_uploaded_file($_FILES['assignment']['tmp_name'],'assets/assignment/'. $fname);
					$data .= ", assignment_path = '$fname' ";

		}
		if(empty($id)){
			// echo "INSERT INTO application set ".$data;
			// exit;
			
			$save = $this->db->query("UPDATE application set ".$data." where email=".$email);
			
		}
		if($save)
		//$headers = "MIME-Version: 1.0" . "\r\n";
		//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		//$message="Please find your assignment below
	    //Assignment: Create an api";
		 //More headers
		//$headers .= 'From: <webmaster@example.com>' . "\r\n";
		//$headers .= 'Cc: myboss@example.com' . "\r\n";
		
		//mail($to,$subject,$message,$headers);
		//if (mail($to_email, $subject, $body, $headers)) {
		//	echo "Email successfully sent to $to_email...";
		//} else {
		//	echo "Email sending failed...";
		//}
			return 1;
	}
	function delete_assignment(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM assignment where id = ".$id);
		if($delete)
			return 1;
	}
	function documents(){
		extract($_POST);
		$id=$_SESSION['id'];
		
		$data = " user_id = '$id' ";
		$name= $_FILES['file']['name'];
		//$data .= ", document = '".htmlentities(str_replace("'","&#x2019;",$file))."' ";
		//var_dump($_FILES); 
		if($_FILES['file']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['file']['name'];
						$move = move_uploaded_file($_FILES['file']['tmp_name'], $fname);
					$data .= ", file_path = '$fname' ";

		}
		if(!empty($id)){
			// echo "INSERT INTO application set ".$data;
			// exit;
			
			$save = $this->db->query("INSERT INTO `documents`(`file_path`, `name`, `user_id`) VALUES ('$fname','$name','$id') ");
			if($save)
			//$headers = "MIME-Version: 1.0" . "\r\n";
			//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			
			//$message="Please find your assignment below
			//Assignment: Create an api";
			 //More headers
			//$headers .= 'From: <webmaster@example.com>' . "\r\n";
			//$headers .= 'Cc: myboss@example.com' . "\r\n";
			
			//mail($to,$subject,$message,$headers);
			//if (mail($to_email, $subject, $body, $headers)) {
			//	echo "Email successfully sent to $to_email...";
			//} else {
			//	echo "Email sending failed...";
			//}
				return 1;
		}		
		}
		
}
