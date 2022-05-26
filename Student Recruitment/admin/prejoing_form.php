<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include 'db_connect.php';
include('header.php');
if (isset($_POST['submit'])){

$name  = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['number'];
$photo = $_FILES['Upload_Image']['tmp_name'];
$address = $_POST['comment'];
$gender = $_POST['gender'];
$dob = $_POST['date'];
$hometown = $_POST['Home_town'];
$state = $_POST['State'];
$idproof = $_FILES['filename']['tmp_name'];



// header('Location: downloadprejoin.php');


$query="INSERT INTO `details`(`name`,`email`,`number`,`Upload_Image`, `comment`, `gender`, `date`, `Home_town`, `State`, `filename`) VALUES 
('$name','$email','$mobile','$photo','$address','$gender','$dob','$hometown','$state','$idproof')";
 $result = mysqli_query($conn , $query) or die (mysqli_error($conn)); 
$query = "SELECT * FROM details WHERE name = '$name'";

$result = mysqli_query($conn , $query) or die (mysqli_error($conn));

?>
<script>
  window.location.href = "index.php?page=joining_letter";
</script>
<?php 
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $photo = $row['Upload_Image'];
    $address = $row['comment'];
    $gender = $row['gender']=$gender;
    $dob = $row['date'];
    $hometown = $row['Home_town'];
    $state = $row['State'];
    $idproof =$row['filename'];

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
$nameErr = $emailErr = $genderErr = $mobile = $dob = $hometown = $state = $idpfoot ="";
$name = $email = $gender = $address = $mobile  = $dob = $hometown = $state = $idpfoot ="";

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

  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  echo("hello");
}

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
    <h3 class="text-black bg-light">Pre Joining Form </h3>
    </div>
    <div class="card-body">
    <p><span class="error">* required field</span></p>
<form method="post" action="<?php echo 'index.php?page=joining_letter';//htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype='multipart/form-data'>  
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="<?php echo $_SESSION['name']?>" readonly>
    <small class="form-text text-muted error"><?php echo $nameErr;?></small>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $_SESSION['email']?>" readonly>
      <small class="form-text text-muted error"><?php echo $emailErr;?></small>
    </div>
    <!-- <div class="form-group col-md-6"> -->
      <!-- <label for="mobile">Mobile no.:</label> -->
      <input type="hidden" name="mobile" class="form-control" id="mobile" placeholder="Mobile No." value="+91 9673793866" readonly >
      <input type="hidden" name="number" class="form-control" id="mobile" placeholder="Mobile No." value="+91 9673793866" readonly >
      <!-- <small class="form-text text-muted error"><?php echo $mobile;?></small> -->
    <!-- </div> -->
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="control-label" for="Upload_Image">Photo:</label>
      <input type="file" name="Upload_Image" id="Upload_Image" placeholder="Upload image">
    </div>
    <div class="form-group col-md-6">
      <label for="comment">Address:</label>
      <textarea class="form-control" name="comment" rows="5" cols="40" id="comment" placeholder="Address"></textarea>
      <small class="form-text text-muted error"><?php echo $mobile;?></small>
    </div>
  </div>

  <div class="form-row">
    <div class="form-check col-md-6">
      <label >Gender:</label><br>
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") //echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") //echo "checked";?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") //echo "checked";?> value="other">Other
    </div>
    <div class="form-group col-md-6">
      <label for="dob">DOB:</label>
      <input type="date" Name="date" class="form-control" id="dob">      
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="city">City:</label>
      <input type="city" Name="Home_town" class="form-control" id="city">      
    </div>
    <div class="form-group col-md-4">
      <label for="State">State:</label>
      <input type="state" Name="State" class="form-control" id="State">      
    </div>
    <div class="form-group col-md-4">
      <label class="control-label" for="myFile">ID Proof:</label><br>
      <input type="file" id="myFile" name="filename"/> 
    </div>
  </div>

    <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
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
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") //echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") //echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") //echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
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
