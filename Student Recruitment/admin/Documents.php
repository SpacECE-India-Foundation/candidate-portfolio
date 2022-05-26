<?php
include('./header.php');
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include('db_connect.php');
$id= $_SESSION['id'];
echo("hello");
echo($id);
$query = "SELECT * FROM documents limit 1 ";
$conn= new mysqli('localhost','root','','candidate_portal')or die("Could not connect to mysql".mysqli_error($conn));
$isGeneratedOffer=false;
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));


if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
  // echo('<b>Download offer Letter</b> <br> <a href="../dashboard/html-to-word-php.php" class="btn btn-primary" >Download here</br></a>');   
  $isGeneratedOffer=true;
  }
}
echo($isGeneratedOffer);
?>

<div class="container" style="padding-top:3%">
<div class="card">
  <div class="card-header">
    <div class="lead">Offer Letter</div>
  </div>
  <div class="card-body">
  <form method="post" id="ss" enctype="multipart/form-data">

<!-- <h2>Please Upload valid ID proof here</h2> -->
      <!-- <div class="custom-file"> -->
          <!-- <br><br> -->
 <!-- <h4>Upload your adhar card here</h4>         
<input type="file" class="custom-file-input" id="document"  name="documents" accept="application/msword,text/plain, application/pdf" required="required">
<label class="custom-file-label" for="documents" require="require"></label><br><br> -->
      
        <a href="./dashboard/html-to-word-php.php" class="btn btn-primary" >Download here</br></a>
        

      <div id="gh1">

      </div>
      <br>
      <!-- <a class="btn btn-secondary" href="../index.php?home">Home</a> -->
</form>

  </div>
</div>
</div>
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
// formData.append('file', $('#document')[0].files[0]);
$('#submit').hide();  
 


// let file = $("#document")[0].files[0]; 
// file.name
//alert(file.name);
// code here CAN use carName

//alert("Reaching here");
$.ajax({
      url:'admin/ajax.php?action=save_documents',     
      data : formData,
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      async: false,
      
      contentType: false,
      enctype: 'multipart/form-data',
      error:err=>{
        // alert(err)
      },
      success:function(resp){
        $.ajax({
			url:'dashboard/html-to-word-php.php',
			
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'GET',
			error:err=>{
				console.log(err)
			},
			success:function(res){
				alert(res)
      
				// $("#gh1").append('<h1>Download here</h1><b class="btn btn-primary">Download offer Letter</b> <br> <a href="../dashboard/html-to-word-php.php" class="btn btn-primary" >Download here</br></a>');
          window.location.reload()
			}
		})
          //alert(resp);
  } 
  })
}

</script>

