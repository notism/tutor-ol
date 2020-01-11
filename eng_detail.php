<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
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

	<!-- Menu -->
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
	
	


	

	<!-- Intro -->

	<div class="intro">
		<div class="intro_background parallax-window" data-parallax="scroll" data-image-src="images/eng1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_container d-flex flex-column align-items-start justify-content-end">
						<div class="intro_content">
							<div class="intro_price">Free</div>
							<div class="rating_r rating_r_4 intro_rating"><i></i><i></i><i></i><i></i><i></i></div>
							<div class="intro_title">English</div>
							<div class="intro_meta">
								<div class="intro_image"><img src="images/instructor_8.jpg" alt=""></div>
								<div class="intro_instructors">Peter Parker ● Head Tutor</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Course -->

	<div class="course">
		<div class="course_top"></div>
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Panels -->
				<div class="col-lg-9">
					<div class="tab_panels">

						<!-- Tabs -->
						<div class="course_tabs_container">
							<div class="container">
								<div class="row">
									<div class="col-lg-9">
										<div class="tabs d-flex flex-row align-items-center justify-content-start">
											<div class="tab active">คำบรรยาย</div>
											
											<div class="tab">รีวิว</div>
											
										</div>
									</div>
								</div>
							</div>		
						</div>

						<!-- Description -->
						<div class="tab_panel description active">
							<div class="panel_title">About this course</div>
							<div class="panel_text">
								<p>TUTOR ONLINE English language training program is designed to develop students' ability to communicate confidently in English for a wide range of situations including travel, work and social interactions.<br><br>
With particular emphasis on communication skills, our program aims to build students' language skills in all areas including Reading, Writing, Listening, and Speaking as well as vocabulary, grammar, and pronunciation.</p>
							</div>
							
							<!-- Instructors -->
							<div class="instructors">
								<div class="panel_title">TUTOR</div>
								<div class="row instructors_row">

									

									
									<!-- Instructor -->
									<?php
									include('list_eng.php');					
						
?>
									
								
									</div>
								</div>

							<!-- 	 -->
							<div class="faqs">
							
								<!--<div class="panel_title">FAQs</div>-->
								<div class="accordions">
											
									<div class="elements_accordions">
<!--
										<div class="accordion_container">
											<div class="accordion d-flex flex-row align-items-center active"><div>Can I just enroll in a single course? I'm not interested in the entire Specializat</div></div>
											<div class="accordion_panel">
												<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
											</div>
										</div>

										<div class="accordion_container">
											<div class="accordion d-flex flex-row align-items-center"><div>What is the refund policy?</div></div>
											<div class="accordion_panel">
												<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
											</div>
										</div>

										<div class="accordion_container">
											<div class="accordion d-flex flex-row align-items-center"><div>What background knowledge is necessary</div></div>
											<div class="accordion_panel">
												<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
											</div>
										</div>

										<div class="accordion_container">
											<div class="accordion d-flex flex-row align-items-center"><div>Do i need to take the courses in a specific ord</div></div>
											<div class="accordion_panel">
												<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus.</p>
											</div>
										</div>
-->
									</div>

								</div>
							</div>
						</div>
						
					
						 
						 
						

						<!-- Reviews -->
						<div class="tab_panel reviews">
							<div class="panel_title">รีวิว</div>
							
						

							<div class="cur_reviews">
							<?php
						// connect to the database
					include('connect_db.php');
// get results from database
$sql="SELECT * FROM e_comment";
$rs=$conn->query($sql);
// Print Header of Table
echo "<table border='0' cellpadding='10' width=80%>"; //open table
echo "<tr>
<th><h4><center>วันที่แสดงความคิดเห็น</th>
<th><h4><center>ความคิดเห็น</th>

 </tr>";
// loop through results of database query, displaying them in the table
while($row = $rs->fetch_assoc()) {
 // echo out the contents of each row into a table
echo "<tr>";
echo '<td><center>' . $row['c_date'] . '</td>';

echo '<td><center>' . $row['c_detail'] . '</td>';

echo "</tr>";
}
echo "</table>"; // close table
$conn->close(); // close database connection
?><br><br><br><br>
							<form action="comment_e.php" method="post">
								
								<textarea name="c_detail" cols="95"rows="5" required></textarea>
								<div class="col-lg-6 contact_col">
								ชื่อ : <input type="text" class="input1" name="c_user" readonly="readonly" value="<?php echo $_SESSION['User_ID'] ; ?>">
								</div>
								<div class="col-lg-6 contact_col">
								<button type="submit" class="button" >แสดงความคิดเห็น</button>
								</div>
							</form>
							<br>
							
							</div>
						</div>

						
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_background"></div>
						<div class="sidebar_top"><a href="eng_c.php">ลงทะเบียน</a></div>
						<div class="sidebar_content">

							<!-- Features -->
							<div class="sidebar_section features">
								<div class="sidebar_title">Course Features</div>
								<div class="features_content">
									<ul class="features_list">

										<!-- Feature -->
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duration</span></div>
											<div class="feature_text ml-auto">1 hour</div>
										</li>

										</ul>
								</div>
							</div>

							
							<!-- You may like -->
							
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="js/course.js"></script>
</body>
</html>