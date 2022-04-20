<html>
<body style=" background-image: url('../images/bg_8.jpg');">
<head>
<?php
session_start();
include './includes/connection.php';
 ?>
<?php include './includes/header.php';?>
<?php  include 'includes/navbar.php';?>

<?php

if (isset($_POST['login'])) {
 
  $username  = $_POST['user'];
  $password  = $_POST['pass'];
  $password =md5($password);//for change
  $query = "SELECT * FROM user WHERE uname = '$username' and upass = '$password'";

  $result = mysqli_query($conn , $query) or die (mysqli_error($conn));
  echo "Number of rows::".mysqli_num_rows($result);
  
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

      print_r("users Array:".var_dump($row));

      $id = $row['uid'];
      $user = $row['uname'];
      $pass = $row['upass'];
      
      $name = $row['name'];
      $email = $row['uname'];
      $role= $row['role'];
      $course = $row['course'];
      $date = $row['joindate'];

      $_SESSION['username'] = $username;//Todo: change it to Session variable uname
      $_SESSION['uname'] = $username; 
      
      $_SESSION['user']=$email;//Todo: change it to Session variable uname


      $_SESSION['departmentId']=$row['departmentId'];

      $_SESSION['id'] = $id;//Todo: change it to Session variable login_id
      $_SESSION['login_id']= $id;
      
      $_SESSION['name'] = $name;
      $_SESSION['email']  = $email;

      $_SESSION['role'] = $role;
      $_SESSION['course'] = $course;
      
      $_SESSION['SESS_MEMBER_ID']=$id;
      $_SESSION['SESS_FIRST_NAME']=$row['uname'];//Todo: change it to Session variable name
      $_SESSION['login_name']=$name;//Todo: Duplicate of first name session variable
      $_SESSION['SESS_LAST_NAME']=$row['name'];

      $_SESSION['login_type']=1;//Todo: Understand the values of the type
      $_SESSION['joindate']=$date;

      $system = $conn->query("SELECT * FROM system_settings")->fetch_array();
      foreach($system as $k => $v){
        $_SESSION['system'][$k] = $v;
      }//foreach

      header('location: ../index.php');
    }//while
  }//if (mysqli_num_rows($result) > 0) {
  else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";

  }//else
}//if (isset($_POST['login'])) {

?>
    <a href="http://localhost/chatbot/admin/?page=responses/manage" class="nav-link" style="background-color:green"><b>May I help You</b></a>
    
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="POST">
    <input type="text" name="user" placeholder="Username" required="">
    <input type="password" name="pass" placeholder="Password" required="">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
  <a href="signup.php">Register</a> • <a href="recoverpassword.php">Forgot Password</a>
  </div>
</div>

  <script src='css/jquery.min.js'></script>
<script src='css/jquery-ui.min.js'></script>

  
</body>
</html>