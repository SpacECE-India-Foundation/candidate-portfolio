<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include 'admin/db_connect.php';
include('header.php');
if (isset($_POST['submit'])){

// $name  = $_POST['name'];
// $email = $_POST['email'];
// $mobile= $_POST['mobile'];
// $Video = $_FILES['Video']['tmp_name'];
// $address = $_POST['comment'];
// $department= $_POST['department'];
// $suggestion= $_POST['suggestion'];
// $projecttitle= $_POST['projecttitle'];
// $enddate = $_POST['enddate'];
// $startdate = $_POST['startdate'];
// $experience = $_POST['experience'];
// $guidance = $_POST['guidance'];
// $culture = $_FILES['culture']['tmp_name'];

$nameErr = $emailErr = $experience = $mobile = $StartDate  = $enddate = $projecttitle = $Video =$guidance =$culture ="";
$name = $email = $mobile = $Suggestions =  $StartDate  = $enddate   = $Department =$guidance =$culture =$Video ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["mobile"])) {
    $mobile = "Mobile is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    
  }

  if (empty($_POST["Video"])) {
    $Video = "";
  } else {
    $Video = test_input($_POST["Video"]);
  }

  if (empty($_POST["department"])) {
    $department = "department is required";
  } else {
    $department = test_input($_POST["department"]);
  }
  if (empty($_POST["comment"])) {
    $suggestion = "suggestion is required";
  } else {
    $suggestion = test_input($_POST["comment"]);
  }
  if (empty($_POST["enddate"])) {
    $enddate = "enddate is required";
  } else {
    $enddate = test_input($_POST["enddate"]);
  }
  if (empty($_POST["title"])) {
    $projecttitle = "projecttitle is required";
  } else {
    $projecttitle = test_input($_POST["title"]);
  }
  if (empty($_POST["experience"])) {
    $experience = "experience is required";
  } else {
    $experience = test_input($_POST["experience"]);
  }
  if (empty($_POST["startdate"])) {
    $startdate = "startdate is required";
  } else {
    $startdate = test_input($_POST["startdate"]);
  }
  if (empty($_POST["guidance"])) {
    $guidance = "guidance is required";
  } else {
    $guidance = test_input($_POST["guidance"]);
  }
  if (empty($_POST["culture"])) {
    $culture = "culture is required";
  } else {
    $culture = test_input($_POST["culture"]);
  }
  

  // echo("hello");
}


// header('Location: downloadprejoin.php');


$query="INSERT INTO `exit_form`(`Name_actual`, `Email`, `Mobile_no`, `Video`, `department`, `suggestion`, `project_title`, `end_date`, `start_date`, `experience`,`guidance`,`culture`)  VALUES 
('$name','$email','$mobile','$Video','$department','$suggestion','$projecttitle','$enddate','$startdate','$experience','$guidance','$culture')";
//  echo $query;
 $result = mysqli_query($conn , $query) or die (mysqli_error($conn)); 
 $vax=$_SESSION['name'];
$query = "SELECT * FROM exit_form WHERE Name = '$vax'";

$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
//the subject
$sub = "Exit formalities completed";
//recipient email here
$rec = $_SESSION['uname'];
//the message
$msg = file_get_contents("Exit_Formalities.html");
//send email
$hed = 'MIME-Version: 1.0' . "\r\n";
$hed .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($rec,$sub,$msg,$hed);
$sub1="COMPLETION LETTER";
$msg1=file_get_contents("Completion_Letter.php");
$hed = 'MIME-Version: 1.0' . "\r\n";
$hed .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($rec,$sub1,$msg1,$hed);

?>
<script>
  window.location.href = ."./dashboard/completion.php";
</script>
<?php 
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    
    $name = $row['Name_actual'];
    $email = $row['email'];
    $Video = $row['Video'];
    $department = $row['department'];
    $suggestion = $row['suggestion'];
    $enddate = $row['enddate'];
    $projecttitle = $row['projecttitle'];
    $startdate = $row['startdate'];
    $experience=$row['experience'];
    $guidance=$row['guidance'];
    $culture=$row['culture'];
      // $_SESSION['id'] = $id;
      // $_SESSION['name'] = $name;
      // $_SESSION['email']= $email;
      // $_SESSION['Upload_Images'] = $photo;
      // $_SESSION['comment']  = $address;
      // $_SESSION['gender']=$gender;
      // $_SESSION['date'] = $dob;
      // $_SESSION['Home_town'] = $hometown;
      // $_SESSION['State']=$state;
      // $_SESSION['filename']=$idproof;
  }
  }
}
// define variables and set to empty values
//$nameErr = $emailErr = $experience = $mobile = $StartDate  = $enddate = $projecttitle = $Video =$guidance =$culture ="";
// $name = $email = $mobile = $Suggestions =  $StartDate  = $enddate   = $Department =$guidance =$culture =$Video ="";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   } else {
//     $name = test_input($_POST["name"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//       $nameErr = "Only letters and white space allowed";
//     }
//   }
  
//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//     // check if e-mail address is well-formed
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $emailErr = "Invalid email format";
//     }
//   }
    
//   if (empty($_POST["mobile"])) {
//     $mobile = "Mobile is required";
//   } else {
//     $mobile = test_input($_POST["mobile"]);
    
//   }

//   if (empty($_POST["Video"])) {
//     $Video = "";
//   } else {
//     $Video = test_input($_POST["Video"]);
//   }

//   if (empty($_POST["department"])) {
//     $department = "department is required";
//   } else {
//     $department = test_input($_POST["department"]);
//   }
//   if (empty($_POST["suggestion"])) {
//     $suggestion = "suggestion is required";
//   } else {
//     $suggestion = test_input($_POST["suggestion"]);
//   }
//   if (empty($_POST["enddate"])) {
//     $enddate = "enddate is required";
//   } else {
//     $enddate = test_input($_POST["enddate"]);
//   }
//   if (empty($_POST["projecttitle"])) {
//     $projecttitle = "projecttitle is required";
//   } else {
//     $projecttitle = test_input($_POST["projecttitle"]);
//   }
//   if (empty($_POST["experience"])) {
//     $experience = "experience is required";
//   } else {
//     $experience = test_input($_POST["experience"]);
//   }
//   if (empty($_POST["startdate"])) {
//     $startdate = "startdate is required";
//   } else {
//     $startdate = test_input($_POST["startdate"]);
//   }
//   if (empty($_POST["guidance"])) {
//     $guidance = "guidance is required";
//   } else {
//     $guidance = test_input($_POST["guidance"]);
//   }
//   if (empty($_POST["culture"])) {
//     $culture = "culture is required";
//   } else {
//     $culture = test_input($_POST["culture"]);
//   }
  

//   echo("hello");
// }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html lang="en">
  <style>
.error {color: #FF0000;}
.container{
  padding-top:20px;
}
</style>
</head>

<body>

<div class="container">
  <div class="card">
    <div class="card-header">
    <h3 class="text-black bg-light">Exit Form </h3>
    </div>
    <div class="card-body">
    <p><span class="error">* required field</span></p>
<form method="post" action="./index.php?page=exit_formalities">  
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="<?php echo $_SESSION['name']?>" readonly>
    <small class="form-text text-muted error"><?php  if (isset($nameErr)){echo $nameErr;}?></small>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $_SESSION['email']?>" readonly>
      <small class="form-text text-muted error"><?php if (isset($emailErr)){echo $emailErr;} ?></small>
    </div>
    <div class="form-group col-md-6"> 
       <label for="mobile">Mobile no.:</label> 
      <input  name="mobile" class="form-control" id="mobile" placeholder="Mobile No."   >
      
       <small class="form-text text-muted error"><?php if (isset($mobile)){echo $mobile;} ?></small> 
     </div> 
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="control-label" for="Upload_Image">Video</label>
      <input type="file" name="Upload_Image" id="Upload_Image" placeholder="Upload video">
    </div>
    <div class="form-group col-md-6">
      <label for="comment">Suggestions</label>
      <textarea class="form-control" name="comment" rows="5" cols="40" id="comment" placeholder="Suggestions"></textarea>
      <small class="form-text text-muted error"><?php if (isset($emailErr)){echo $mobile;}?></small>
    </div>
  </div>

  <div class="form-row">
    <div class="form-check col-md-6">
      <label >How was your experience in the organization:</label><br>
      <input type="radio" name="experience" <?php if (isset($experience) && $experience=="1") //echo "checked";?> value="1">1
      <input type="radio" name="experience" <?php if (isset($experience) && $experience=="2") //echo "checked";?> value="2">2
      <input type="radio" name="experience" <?php if (isset($experience) && $experience=="3") //echo "checked";?> value="3">3
      <input type="radio" name="experience" <?php if (isset($experience) && $experience=="4") //echo "checked";?> value="4">4
      <input type="radio" name="experience" <?php if (isset($experience) && $experience=="5") //echo "checked";?> value="5">5
    </div>
    <div class="form-group col-md-6">
      <label for="dob">Department:</label>
      <input type="text" Name="department" class="form-control" >      
    </div>
    <div class="form-group col-md-6">
      <label for="dob">Start Date:</label>
      <input type="date" Name="startdate" class="form-control" id="dob">      
    </div>
    <div class="form-group col-md-6">
      <label for="dob">End Date:</label>
      <input type="date" Name="enddate" class="form-control" id="dob">      
    </div>
  </div>
  <div class="form-row">
    <div class="form-check col-md-6">
      <label >Did you like the organization culture? </label><br>
      <input type="radio" name="culture" <?php if (isset($culture) && $culture=="Yes") //echo "checked";?> value="Yes">Yes
      <input type="radio" name="culture" <?php if (isset($culture) && $culture=="No") //echo "checked";?> value="No">No
      
    </div>
    <div class="form-check col-md-6">
      <label >Did you get proper guidance from your mentor during the internship period? </label><br>
      <input type="radio" name="guidance" <?php if (isset($guidance) && $guidance=="Yes") //echo "checked";?> value="Yes">Yes
      <input type="radio" name="guidance" <?php if (isset($guidance) && $guidance=="No") //echo "checked";?> value="No">No
      
    </div>
    <div class="form-group col-md-6">
      <label for="title">Project Title:</label>
      <input type="title" name="title" class="form-control" id="title" ">
      
    </div>
  </div>
  <input type="submit"  name="submit" class=sub id="gw" >
    <!--<button id="sa"  name="su"  class="btn btn-primary">Submit</button>-->
    <button type="reset" name="reset" value="Submit" class="btn btn-secondary">Reset</button>

   <!-- <input type="text" name="name" value="<?php //echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span> -->
  <!-- <br><br>
  E-mail: <input type="text" name="email" value="<?php //echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  mobile no.: <input type="text" name="number" value="<?php //echo $mobile;?>">
  <span class="error"><?php echo $mobile;?></span>
  <br><br> -->
  <!-- photo: <input type="file" value="Upload_Image" name="Upload_Image" <?php //echo $photo;?>>
  <br><br>
  Address: <textarea name="comment" rows="5" cols="40"><?php //echo $address;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($experience) && $experience=="female") //echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($experience) && $experience=="male") //echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($experience) && $experience=="other") //echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $experience;?></span>
  <br><br>
  DOB: <input type="date" Name="date">
  <br><br>
  Home town: <input type="city" Name="Home_town">
  <br><br>
  State: <input type="state" Name="State">
  <br><br>
  ID proof: <input type="file" id="myFile" name="filename">
  <br><br> -->
  
  <!-- <input type="submit" name="submit" value="Submit" > <br>  -->

  <!--<b>Download Joining Letter</b> <br> <a href="../dashboard/html-to-word-php.php" class="btn btn-primary" >Download here</br></a>-->
              	
</form>
    </div>
  </div>
</div>
</body>
</html>
