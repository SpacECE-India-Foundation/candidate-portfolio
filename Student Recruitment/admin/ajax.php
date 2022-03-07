<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
if($action == "save_settings"){
	$save = $crud->save_settings();
	if($save)
		echo $save;
}
if($action == "save_recruitment_status"){
	$save = $crud->save_recruitment_status();
	if($save)
		echo $save;
}
if($action == "delete_recruitment_status"){
	$save = $crud->delete_recruitment_status();
	if($save)
		echo $save;
}
if($action == "save_vacancy"){
	$save = $crud->save_vacancy();
	if($save)
		echo $save;
}
if($action == "delete_vacancy"){
	$save = $crud->delete_vacancy();
	if($save)
		echo $save;
}
if($action == "save_application"){

	//var_dump($_POST);
	$email=$_POST['email'];
    $lastname=$_POST['lastname'];
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$cover_letter=$_POST['cover_letter'];
	$position_id=$_POST['position_id'];
	$resume=$_FILES['resume']['tmp_name'];


	
	$save = $crud->save_application($lastname,$firstname,$middlename,$address,$contact,$email,$gender,$cover_letter,$position_id,$resume);
// 	if($save)
// 		echo $save;
}
if($action == "delete_application"){
	$save = $crud->delete_application();
	if($save)
		echo $save;
}
if($action == "save_assignment"){
	$email=$_POST['email'];
    $assignment=$_POST['assignment'];
	$fname=$_POST['fname'];
	$save = $crud->save_assignment($email,$assignment,$fname);
	if($save)
		echo $save;
}

if($action == "save_documents"){
	$save = $crud->documents();
	if($save)
		echo $save;
//echo "hello";
}
