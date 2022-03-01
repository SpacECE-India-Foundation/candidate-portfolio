<?php
session_start();
include 'db_connect.php';
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

$query="INSERT INTO `details`(`name`,`email`,`number`,`Upload_Image`, `comment`, `gender`, `date`, `Home_town`, `State`, `filename`) VALUES 
('$name','$email','$mobile','$photo','$address','$gender','$dob','$hometown','$state','$idproof')";
 $result = mysqli_query($conn , $query) or die (mysqli_error($conn)); 
$query = "SELECT * FROM details WHERE name = '$name'";

$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $photo = $row['Upload_Image'];
    $address = $row['comment'];
    $gender = $row['gender']; 
    $dob = $row['date'];
    $hometown = $row['Home_town'];
    $state = $row['State'];
    $idproof =$row['filename'];

    
      $_SESSION['id'] = $id;
      $_SESSION['name'] = $name;
      $_SESSION['email']= $email;
      $_SESSION['Upload_Images'] = $photo;
      $_SESSION['comment']  = $address;
      $_SESSION['gender']=$gender;
      $_SESSION['date'] = $dob;
      $_SESSION['Home_town'] = $hometown;
      $_SESSION['State']=$state;
      $_SESSION['filename']=$idproof;
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
</style>
</head>

<body style="center">
<h2>Pre Joining Form </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype='multipart/form-data'>  
  Name: <input type="text" name="name" value="<?php //echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php //echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  mobile no.: <input type="text" name="number" value="<?php //echo $mobile;?>">
  <span class="error"><?php echo $mobile;?></span>
  <br><br>
  photo: <input type="file" value="Upload_Image" name="Upload_Image" <?php //echo $photo;?>>
  <br><br>
  Adress: <textarea name="comment" rows="5" cols="40"><?php //echo $address;?></textarea>
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
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;
?>

</body>
</html>