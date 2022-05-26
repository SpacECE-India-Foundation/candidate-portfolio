<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('admin/db_connect.php');
    ob_start();
    $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
     foreach ($query as $key => $value) {
      if(!is_numeric($key))
        $_SESSION['setting_'.$key] = $value;
    }
    ob_end_flush();
    include('header.php');
    // //include('assignment.php');

	
    ?>

    <style>
    	header.masthead {
		  background: url(admin/assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
        <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./"><?php echo $_SESSION['setting_name'] ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                        
                     
                    </ul>
                </div>
            </div>
        </nav> -->
  <!-- <nav class="mnb navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header d-flex align-center justify-between">
    <a class="navbar-brand js-scroll-trigger" href="./"></a>
    <?php //echo $_SESSION['setting_name'] ;?>
    <a class="navbar-right" href="logout.php">Logout</a>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">RECRUITMENT MANAGEMENT SYSTEM</a>
    <form class="d-flex ml-auto">
      <a href="logout.php" class="btn btn-link">Logout</a>
    </form>
  </div>
</nav>
<!--msb: main sidebar-->
<div class="msb" id="msb">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<div class="brand-wrapper">
					<!-- Brand -->
					<div class="brand-name-wrapper">
            <strong>Dashboard</strong>
					</div>

				</div>

			</div>

			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">

					<li id="home"><a href="index.php?page=home"></i>Home</a></li>
					<li id="applications"><a href="index.php?page=applications"></i>My Assignment</a></li>
          <li id="view"><a href="index.php?page=view"></i>Offer Letter</a></li>
					<li id="joining_letter"><a href="index.php?page=joining_letter"></i>Joining Letter</a></li>
          <li id="completion_letter"><a href="index.php?page=exit_form"></i>Exit Formalities</a></li>
					<li id="about"><a href="index.php?page=about"></i>About</a></li>

					<!-- Dropdown-->
					<!-- <li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl1">
							</i> Offer Letter
						  <span class="caret"></span>
            </a>
						<!-- Dropdown level 1 --
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="#">Mail</a></li>
									<li><a href="#">Calendar</a></li>
									<li><a href="#">Ecommerce</a></li>
									<li><a href="#">User</a></li>
									<li><a href="#">Social</a></li>

									<!-- Dropdown level 2 --
									<li class="panel panel-default" id="dropdown">
										<a data-toggle="collapse" href="#dropdown-lvl2">
											<i class="glyphicon glyphicon-off"></i> Sub Level <span class="caret"></span>
										</a>
										<div id="dropdown-lvl2" class="panel-collapse collapse">
											<div class="panel-body">
												<ul class="nav navbar-nav">
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li> -->
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>  
</div>
<!--main content wrapper-->

       
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        include('header.php');

        ?>
       

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-righ t"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div id="preloader"></div>
  <br>
 
        
        <script>
            (function(){
  $('#msbo').on('click', function(){
    $('body').toggleClass('msb-x');
  });
}());

const tab_active=<?php $page = isset($_GET['page']) ?$_GET['page'] : "home"; echo $page ?>

console.log("here"+tab_active);
      $(tab_active).toggleClass('tab-active');
      
         </script>
       <?php include('footer.php') ?>
    </body>

    <?php $conn->close() ?>

</html>
