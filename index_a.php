<?php
session_start();

?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>Tutor Online</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
									<li class="active"><a href="index_a.php">Home</a></li>
									
									<li><a href="allcourse.php">My Class</a></li>
									<li><a href="t_prof.php">My Profile</a></li>
									<li><a href="chat_g2.php">Chat</a></li>
									<li><a href="contact2.php">Contact</a></li>
								</ul>
							</nav>
							<div class="header_content_right ml-auto text-right">
								<div class="header_search">
									
									<nav class="main_nav_contaner">
										<ul class="main_nav">
										<li><a href="edit2_profile.php">Edit Profile</a></li>
										</ul>
									</nav>
									
								</div>
								<!-- Hamburger -->

								<div class="user"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></i></a></div>
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
				<li class="menu_mm"><a href="index_a.php">Home</a></li>									
				<li class="menu_mm"><a href="allcourse.php">My Class</a></li>
				<li class="menu_mm"><a href="t_prof.php">My Profile</a></li>
				<li class="menu_mm"><a href="chat_g2.php">Chat</a></li>
			    <li class="menu_mm"><a href="contact2.php">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">	
			<div class="menu_social">
					<li><a href="edit2_profile.php">Edit Profile</a></li>			
				<ul>					
					<li><a href="login.php">Log out</i></a></li>					
				</ul>
			</div>
		</div>
	</div>
	

	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h1 class="home_title">Teach Over</h1>
						
						<div class="home_button trans_200"><a href="allcourse.php">Check class</a></div>
						<div class="home_button trans_200"><a href="chat_g2.php">Chat</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Courses -->

	<div class="courses">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Education News</h2>
					
				</div>
			</div>
			<div class="row courses_row">

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_1.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="#">มาแล้ว ช่วงคะแนนสอบ GAT/PAT ปี 2561 เทียบให้ดูชัดๆ 60 vs 61</a></div>
							<div class="course_info">
								<ul>
									<li><a href="#">ข่าว</a></li>
									<li><a href="#">แอดมินชัน</a></li>
								</ul>
							</div>
							<div class="course_text">
								<p>ช่วงคะแนนจำนวนและร้อยละของนักเรียนตามช่วงคะแนนผลการสอบ GAT/PAT ประจำปีการศึกษา 2561 แม้ปี 61 จำนวนักเรียนที่เข้าสอบลดลงอย่างมาก แต่ผลคะแนนหลายวิชากลับสูงขึ้น !! เช่น GAT,PAT5</p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							
							<div class="course_mark course_free trans_200"><a href="http://www.unigang.com/Article/42987">อ่านต่อ</a></div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_2.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="#">โพลชี้พ่อแม่เลือกชื่อเสียง 65% กว่า 72% หนุนเลิกค่านิยมโรงเรียนดัง</a></div>
							<div class="course_info">
								<ul>
									<li><a href="#">ข่าว</a></li>
									<li><a href="#">การศึกษา</a></li>
								</ul>
							</div>
							<div class="course_text">
								<p>เมื่อวันที่ 4 เมษายน กรุงเทพโพลล์ โดยศูนย์วิจัยมหาวิทยาลัยกรุงเทพ เปิดเผยว่า ขณะนี้เป็นช่วงที่สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน (สพฐ.)</p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							
							<div class="course_mark course_free trans_200"><a href="http://www.unigang.com/Article/42986">อ่านต่อ</a></div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_3.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="#">กระแสแชร์ผลคะแนน O-NET ม.6 ทั้งฮา ทั้งน้ำตาซึม !!</a></div>
							<div class="course_info">
								<ul>
									<li><a href="#">ข่าว</a></li>
									<li><a href="#">แอดมินชัน</a></li>
								</ul>
							</div>
							<div class="course_text">
								<p>  สำหรับคะแนนเฉลี่ย O-NET ม.6 พบว่า วิชาภาษาไทย ปีที่แล้ว 52.29 ในปีนี้ได้ 49.25, ส่วนวิชาคณิตศาสตร์ ปีที่แล้ว 24.88 มาในปีนี้ได้ 24.53, </p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							
							<div class="course_mark course_free trans_200"><a href="http://www.unigang.com/Article/42980">อ่านต่อ</a></div>
						</div>
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
<script src="js/custom.js"></script>
</body>
</html>