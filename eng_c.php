<?php
session_start();

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

<link rel="stylesheet" type="text/css" href="styles/button191.css">

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

	
	
	<!-- Home -->

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

	<!-- Language -->

	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_title">SELECT COURSES ᵔᴥᵔ </div>
				</div>
			</div>
			
		</div>
	</div>

	<!-- Form -->
	<div class="courses">
		<div class="container">
			<div class="row courses_row">
				<div class="col-lg-6">
					<div class="contact_form_container">
						<div><h3>กรอกข้อมูลการลงทะเบียน</h3></div><br>
						
						
						<form action="insert_c.php" autocomplete="autocomplete" method="post" id="contact_form" class="contact_form">
							<div class="row contact_row">
								<div class="col-lg-6 contact_col">
									<h4>ชื่อวิชา : <input type="text" class="input1" name="c_name" value="English" maxlength="4" size="10" readonly="readonly">
								</div><br><br>
								<div class="col-lg-6 contact_col">
									<h4>ผู้สอน : <input type="text" class="input1" name="t_name" value="Peter Parker" maxlength="4" size="10" readonly="readonly">
								</div>		<br><br><br>
								
								<div class="col-lg-6 contact_col">
									<h4>วัน/เดือน/ปี : <input type="date" class="input1" name="date" value="2019-02-31" min="2019-01-31" >
								</div>	
								<div class="col-lg-6 contact_col">
									<h4>เวลา : <select name="time" class="input1">
									<option value="">-- : --</option>
									<option value="08:00-09:00">08:00-09:00</option>
									<option value="09:00-10:00">09:00-10:00</option>
									<option value="10:00-11:00">10:00-11:00</option>
									<option value="12:00-13:00">12:00-13:00</option>
									<option value="13:00-14:00">13:00-14:00</option>
									<option value="15:00-16:00">15:00-16:00</option>
									<option value="16:00-17:00">16:00-17:00</option>
									
								</select>
								</div>
								<div class="col-lg-12">
									<h4>เลือกสถานที่ :  <input type="textarea" class="input1" name="place_b" required>
								</div><br><br>
								<div class="col-lg-12">
									<h4>ผู้ลงทะเบียน : <input type="text" class="input1" name="u_name"  maxlength="4" size="10" readonly="readonly" value="<?php echo $_SESSION['User_ID']; ?>">
								
								</div><br><br>
								<div class="col">
									<button type="submit" class="button" >ยืนยัน</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_body">
			<div class="container">
				<div class="row">

			
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses.js"></script>
</body>
</html>