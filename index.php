<?php
session_start();
if(!isset( $_SESSION['SESS_MEMBER_ID'])){
header ('location:user/login.php');
exit();
}
 
?>
<!DOCTYPE html>
<html lang="en">
<body>  
 
  <head>
    <title>Candidate Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	   
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="user/login.php"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item"><a href="Student Account/index.php" class="nav-link" style="background-color:orange"><b>Student Account</b></a></li> -->
	        	<li class="nav-item active"><a href="Online_notice_board/user/index.php" class="nav-link pl-0" style="background-color:orange"><b>Online Notice Board</b></a></li>
	        	<li class="nav-item"><a href="online-notes-sharing/dashboard/index.php" class="nav-link" style="background-color:orange"><b>Online Notes Sharing</b></a></li>
	        	<li class="nav-item"><a href="OnlineExamSystem-PHP/index.php"  style="background-color:orange"class="nav-link"><b>Online Exam</b></a></li>
	        	<!-- <li class="nav-item"><a href="Resume/index.php" class="nav-link" style="background-color:"><b>Student Resume </b></a></li> -->
	        	<li class="nav-item"><a href="Task-Management-master/index.php" class="nav-link" style="background-color:"><b>Task Management</b></a></li>
	        	<li class="nav-item"><a href="student_result/srms/index.php" class="nav-link" style="background-color:green"><b>Student Result Management</b></a></li>
            <!-- <li class="nav-item"><a href="Student Recruitment/index.php" class="nav-link" style="background-color:green"><b>Student Recruitment</b></a></li> -->
	          <li class="nav-item"><a href="chatbot/index.php" class="nav-link" style="background-color:green"><b>May I help You</b></a></li>
                   
                </ul>

	      </div>
	    </div>
       
	  </nav>
    <!-- END nav -->
    <div>
     <a href="user/logout.php"  style="background-color:green"><b><center>Log out</center></b></a><marquee bgcolor="yellow"><b>"Memories of childhood were the dreams that stayed with you after you woke."

- Julian Barnes.<b></marquee>
</div>
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Kids Are The Best <span>Explorers In The World</span></h1>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
          </div>
        </div>
        </div>
      </div>

      
      <div class="slider-item" style="background-image:url(images/bg_6.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">SpacECE India<span> Foundation to Helps for Your Child</span></h1>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
          </div>
         </div>
      </div>
 
 
    </section>
       
    </footer>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
 
