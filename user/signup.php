<html>
<body style=" background-image: url('../images/bg_9.jpg');">
<head>
   
<?php session_start();
include 'includes/connection.php';?>
<?php include 'includes/header.php';?>

<?php include 'includes/navbar.php';?>

<?php
if (isset($_POST['signup'])) {
require "gump.class.php";
$gump = new GUMP();
$_POST = $gump->sanitize($_POST); 

$gump->validation_rules(array(
  'username'    => 'required|alpha_numeric|max_len,20|min_len,4',
  'name'        => 'required|alpha_space|max_len,30|min_len,5',
  'email'       => 'required|valid_email',
  'password'    => 'required|max_len,50|min_len,6',
));
$gump->filter_rules(array(
  'username' => 'trim|sanitize_string',
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
          
          <p class="contact"><label for="name">Name</label></p> 
          <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['name']; } ?>"> 
           
          <p class="contact"><label for="email">Email</label></p> 
          <input id="email" name="email" placeholder="example@domain.com" required="" type="email" value="<?php if(isset($_POST['signup'])) { echo $_POST['email']; } ?>"> 
                
                <p class="contact"><label for="username">Create a username</label></p> 
          <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['username']; } ?>"> 
           
                <p class="contact"><label for="password">Create a password</label></p> 
          <input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
          <input type="password" id="repassword" name="repassword" required=""> 
        
            <p class="contact"><label for="gender">Gender </label></p> 
            <select class="select-style gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select><br><br>
            
            <p class="contact"><label for="role">I am a..</label></p> 
            <select class="select-style gender" name="role">
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
            <option value="Admin">Admin</option>
            <option value="Manager">Manager</option>
            </select><br><br>
            
            <p class="contact"><label for="department">Department..</label></p>
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
            <p class="contact"><label> Choose Your pic</label></p>
					<input class="form-control"  type="file" required name="f"/>
            
            <input class="buttom" name="signup" id="submit" tabindex="5" value="Sign me up!" type="submit">    
   </form> 
</div>      
</div>

</body>
</html>