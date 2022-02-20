<?php
include('header.php');
?>
<div class="container  ">

<form id="sc"> 
<div class="col-md-4">
				<label for="" class="control-label">Email</label>

				<input type="email" class="form-control" name="email" required="required">
			</div>
<div  class="row form-group">
			<div class="col-md-7">
				<label for="" class="control-label">Assignment 1 <br> Assignment 2 <br> Assignment 3</label>
				<textarea name="assignments" id="" cols="30" rows="3"  class="form-control"></textarea>
			</div>
		</div>
		
<div class="row form-group">
			<div class="input-group col-md-4 mb-3">
				<div class="input-group-prepend">
			    <span class="input-group-text" id="">Assignment </span>
			  </div>
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" id="assignments" onchange="displayfname(this,$(this))" name="assignments" accept="application/msword,text/plain, application/pdf">
			    <label class="custom-file-label" for="assignments">Choose file</label>
			  </div>

              

        </div>
          
        
		</div>
        <input type="submit" value="Save" class="btn btn-primary" >
        
        </form>
        <?php include('footer.php') ?>
<script>
    function displayfname(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	console.log(input.files[0].name)
        	_this.siblings('label').html(input.files[0].name);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
        $(document).ready(function(){
	$('.select2').select2({
		width:"100%",
		placeholder:'Please select here'
	})
	//$message="This is a kind reminder to submit your assignment"
	    
		 //More headers
		//$headers .= 'From: <webmaster@example.com>' . "\r\n";
		//$headers .= 'Cc: myboss@example.com' . "\r\n";
		
		//mail($to,$subject,$message,$headers);
		//if (mail($to_email, $subject, $body, $headers)) {
		//	echo "Email successfully sent to $to_email...";
		//} else {
		//	echo "Email sending failed...";
		//}
	$('#manage-assignment').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_assignment',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    type: 'POST',
			error:err=>{
				console.log(err)
			},
			success:function(resp){
				if(resp == 1){
					alert_toast('Assignment successfully submitted.','success')
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})

	})
})
</script>

</div>             
