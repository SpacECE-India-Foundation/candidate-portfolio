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
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            </select><br><br>
            
            <p class="contact"><label for="department">Department..</label></p>
            <select class="select-style gender" name="department">
            <option value="Web Development">Intern(Web Development)</option>
            <option value="video editing">Intern(Video Editing)</option>
            <option value="Education-ECCE">Intern(Education-ECCE)</option>
            <option value="Education-Polocy">Intern(Education-Policy</option>
            <option value="Research">Intern(Research)</option>
            <option value="Project Management">Intern(Project Management)</option>
            <option value="Product Marketing">Intern(Product Marketing)</option>
            <option value="Graphics">Intern(Graphics)</option>
            <option value="Financial Accounting">Intern(Financial Accounting)</option>
            <option value="Digital Marketing">Intern(Digital Marketing)</option>
            <option value="HR">Intern(HR)</option>
            <option value="Android Development">Inetrn(Android Development)</option>
            <option value="Lamp Stack Development">Intern(LAMP Stack Development)</option>
            <option value="Cloud Computing">Inetrn(Cloud Computing)</option>
            <option value="MERN Stack Development">Intern(MERN Satck Development)</option>
            <option value="Marketing">Intern(Marketing)</option>
            <option value="Sales">Intern(Sales)</option>
            <option value="Software Testing">Intern(Software Testing)</option>
            <option value="You Tuber">Intern(You Tuber)</option>
            <option value="Data Analyst">Intern(Data Analyst)</option>
            <option value="SEO">Intern(SEO)</option>
            <option value="UI UX Developer">Intern(UI UX Developer)</option>
            <option value="Proposal Writing">Intern(Proposal Writing)</option>
            <option value="Report Writing">Intern(Report Writing)</option>
            <option value="PHP">Intern(PHP)</option>
            <option value="Story Telling">Intern(Story Telling)</option>
            <option value="Blogger">Intern(Blogger)</option>
            <option value="Social Worker">Intern(Social Worker)</option>
            <option value="Fundrasing">Intern(Fundrasing)</option>
            <option value="Event Management">Intern(Event Management)</option>
            <option value="Org Branding">Intern(Org Branding)</option>
            <option value="Curriculum Designer">Intern(Curriculum Designer)</option>
            <option value="Business Plans">Intern(Business Plans)</option>
            <option value="Laravel Development">Intern(Laravel Development)</option>
            <option value="Office Administration">Intern(Office Administration)</option>
            <option value="Cloud Network Administrator">Intern(Cloud Network Administrator)</option>
            <option value="Cloud System Administration">Intern(Cloud System Administration)</option>
            <option value="Content Writing">Intern(Content Writing)</option>
            <option value="Fashion Designing">Intern(Fashion Designing)</option>
             </select><br><br>
            <p class="contact"><label> Choose Your pic</label></p>
					<input class="form-control"  type="file" required name="f"/>
            
            <input class="buttom" name="signup" id="submit" tabindex="5" value="Sign me up!" type="submit">    
   </form> 
</div>      
</div>

</body>
</html>