<?php
session_start();
include('connect_db.php');
// get results from database



$strid =  $_SESSION["ID"];

$strSQL = "SELECT * FROM user WHERE username = '".mysqli_real_escape_string($objCon,$strid)."'";
$objQuery = mysqli_query($objCon,$strSQL);
	
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	

	
	$objCon->close();
?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
						
					</div>
				</div>
			</div>				
		</div>
</div>
</div>
		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container mr-auto">
								<a href="#">
									<div class="logo_text">TUTOR</div><div class="logo_text">ONLINE</div>
								</a>
							</div>
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li><a href="index_u.php">Home</a></li>
									<li ><a href="courses_online.php">Courses Online</a></li>
									<li class="active"><a href="courses.php">Courses</a></li>						        
									<li ><a href="mycourse.php">My Courses</a></li>
									<li><a href="chat_g.php">Chat</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
							<div class="header_content_right ml-auto text-right">
								<div class="header_search">
									
									<nav class="main_nav_contaner">
										<ul class="main_nav">
										<li><a href="edit_profile.php">Edit Profile</a></li>
										</ul>
									</nav>
									
								</div>

								<!-- Hamburger -->

								<div class="user"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>		
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index_u.php">Home</a></li>
				<li class="menu_mm"><a href="courses_online.php">Courses Online</a></li>
				<li class="menu_mm"><a href="courses.php">Courses</a></li>						        
				<li class="menu_mm"><a href="mycourse.php">My Courses</a></li>
									
				<li class="menu_mm"><a href="chat_g.php">Chat</a></li>
				<li class="menu_mm"><a href="blog.php">Blog</a></li>
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">	
			<div class="menu_social">
					<li><a href="edit_profile.php">Edit Profile</a></li>			
				<ul>					
					<li><a href="login.php">Log out</i></a></li>					
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Home -->

	

	<!-- Language -->

	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_title">Learn Easily</div>
				</div>
			</div>
			
		</div>
	</div>

	<!-- Courses -->



	<div class="courses">
		<div class="container">
			<div class="row courses_row">
			
			
			<?php
			include('list_c.php');					
						
?>

				

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses.js"></script>
</body>
</html>