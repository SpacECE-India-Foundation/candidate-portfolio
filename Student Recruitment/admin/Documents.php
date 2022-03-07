<?php
//include('../header.php');
session_start();
include('db_connect.php');
$id= $_SESSION['id'];
$query = "SELECT * FROM documents WHERE user_id ='$id' ";
$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));

$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
  echo('<b>Download offer Letter</b> <br> <a href="../dashboard/html-to-word-php.php" class="btn btn-primary" >Download here</br></a>');   
    
 
  
  }
}
?>

<form method="post" id="ss" enctype="multipart/form-data">
<div class="row form-group" style="margin-left:100px">
			<div class="input-group col-md-4 mb-3">
				<div class="input-group-prepend">
			    <h2>Please Upload valid ID proof here</h2>
                <div class="custom-file">
                    <br><br>
			    <input type="file" class="custom-file-input" id="document"  name="documents" accept="application/msword,text/plain, application/pdf" required="required">
			    <label class="custom-file-label" for="documents" require="require"></label><br><br>
                
                <button type="button"  class="btn btn-primary" id='submit' onclick="change()">Submit </button> </br>

                <div id="gh">
                <h1>Download Offer letter</h1>
             <b class="btn btn-primary">Download offer Letter</b> <br> <a href="../dashboard/html-to-word-php.php" class="btn btn-primary" >Download here</br></a></td> 
             </div> 
            </div>
                
            
			</div>
</form>

<br>

<button class="btn btn-primary" ><a href="view.php"></a> Home</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
//include('../footer.php');
?> 

<script> 

$( document ).ready(function() {
    console.log( "ready!" );
    $("#gh").hide(); 
});
</script>

<script> function change() {

var formData = new FormData();
formData.append('file', $('#document')[0].files[0]);
 
 


let file = $("#document")[0].files[0]; 
// file.name
alert(file.name);
// code here CAN use carName




$.ajax({
      url:'ajax.php?action=save_documents',
      
      
      data : formData,
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      async: false,
      
      contentType: false,
      enctype: 'multipart/form-data',
      error:err=>{
          alert(err)
      },
      success:function(resp){
          alert(resp);
      }
  })
}

</script>

