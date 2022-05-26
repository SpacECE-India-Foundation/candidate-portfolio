<?php include 'db_connect.php' ?>

<?php
	$qry = $conn->query("SELECT * FROM assignments where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<p><b>Assignment:</b><h4><?php echo $assignment ?></h4></p>
			<p><b>uploaded file :</b><h4><?php echo $file ?></h4></p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12">
			<?php echo html_entity_decode($description) ?>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12">
			<button class="btn btn-primary btn-sm float-right" type="button" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>

<style type="">
	#uni_modal .modal-footer{
		display: none
	}
</style>