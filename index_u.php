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
									<li class="active"><a href="index_u.php">Home</a></li>
									<li><a href="courses_online.php">Courses Online</a></li>
									<li><a href="courses.php">Courses</a></li>						        
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

	<div class="home">
		<div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h1 class="home_title">Learn Easily</h1>
						<div class="home_button trans_200"><a href="teacher.php">รายชื่อติวเตอร์</a></div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Language -->

	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_slider_container">
						
						<!-- Language Slider -->

						<div class="owl-carousel owl-theme language_slider">

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="images/Ukrainian.svg" alt=""></div>
									<div class="lang_name">Ukrainian</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="images/Japanese.svg" alt=""></div>
									<div class="lang_name">Japanese</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="images/Lithuanian.svg" alt=""></div>
									<div class="lang_name">Lithuanian</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="images/Swedish.svg" alt=""></div>
									<div class="lang_name">Swedish</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="images/English.svg" alt=""></div>
									<div class="lang_name">English</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="images/Italian.svg" alt=""></div>
									<div class="lang_name">Italian</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="images/Chinese.svg" alt=""></div>
									<div class="lang_name">Chinese</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="images/French.svg" alt=""></div>
									<div class="lang_name">French</div>
								</a>
							</div>

							<!-- Flag -->
							<div class="owl-item language_item">
								<a href="#">
									<div class="flag"><img src="images/German.svg" alt=""></div>
									<div class="lang_name">German</div>
								</a>
							</div>

						</div>

						<div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
						<div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
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
							
							<div class="course_mark trans_200"><a href="http://www.unigang.com/Article/42980">อ่านต่อ</a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Instructors -->

	<div class="instructors">
		<div class="instructors_background" style="background-image:url(images/instructors_background.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">The Best Tutors in Town</h2>
				</div>
			</div>
			<div class="row instructors_row">

				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/instructor_1.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="#">อาจารย์ สมปอง</a></div>
						<div class="instructor_title">ติวเตอร์</div>
						<div class="instructor_text">
							<p>อาจารย์สอนเข้าใจดีมาก, อาจารย์อธิบายดีมาก, อาจารย์ใจดีมาก, บรรยากาศในการเรียนดี</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/instructor_2.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="#">อาจารย์ สมศรี</a></div>
						<div class="instructor_title">ติวเตอร์</div>
						<div class="instructor_text">
							<p>อาจารย์สอนเข้าใจดีมาก, อาจารย์อธิบายดีมาก, อาจารย์ใจดีมาก, บรรยากาศในการเรียนดี</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/instructor_3.jpg" alt=""></div>
						</div>
						<div class="instructor_name"><a href="#">อาจารย์ สมใจ</a></div>
						<div class="instructor_title">ติวเตอร์</div>
						<div class="instructor_text">
							<p>อาจารย์สอนเข้าใจดีมาก, อาจารย์อธิบายดีมาก, อาจารย์ใจดีมาก, บรรยากาศในการเรียนดี</p>
						</div>
						<div class="instructor_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="jzdbox1 jzdbasf jzdcal">

<div class="jzdcalt">March 2019</div>

<span>Su</span>
<span>Mo</span>
<span>Tu</span>
<span>We</span>
<span>Th</span>
<span>Fr</span>
<span>Sa</span>


<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span>1</span>
<span class="circle" data-title="O-NET D-DAY!">2</span>
<span>3</span>
<span>4</span>
<span>5</span>
<span>6</span>
<span>7</span>
<span>8</span>
<span>9</span>
<span>10</span>
<span>11</span>
<span class="circle" data-title="Admission!">12</span>
<span>13</span>
<span>14</span>
<span>15</span>
<span>16</span>
<span>17</span>
<span>18</span>
<span>19</span>
<span>20</span>
<span>21</span>
<span class="circle" data-title="#MusicMonday - share your favorite song!">22</span>
<span>23</span>
<span>24</span>
<span>25</span>
<span>26</span>
<span>27</span>
<span>28</span>
<span>29</span>
<span>30</span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
<span class="jzdb"><!--BLANK--></span>
</div>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Fjalla+One:400|Roboto:400,400italic,700);

body {
  background-color:#F0F8FF;
}

.jzdbox1 {
  width:315px; 
  background:#332f2e; 
  border-radius:5px; 
  overflow:hidden; 
  display:block; 
  margin-bottom:10px; 
  box-shadow:0 0 10px #201d1c; 
  margin:0 auto; 
  margin-top:100px;
}

.jzdcal {
  padding:0 10px 10px 10px; 
  box-sizing:border-box!important; 
  background:#749d9e; 
  background: -webkit-linear-gradient(#749d9e, #b3a68b)!important; 
  background: -o-linear-gradient(#749d9e, #b3a68b)!important; 
  background: -moz-linear-gradient(#749d9e, #b3a68b)!important; 
  background: linear-gradient(#749d9e, #b3a68b)!important;
}

.jzdcalt {
  font:18px 'Roboto'; 
  font-weight:700; 
  color:#f7f3eb; 
  display:block; 
  margin:18px 0 0 0; 
  text-transform:uppercase; 
  text-align:center; 
  letter-spacing:1px;
}

.jzdcal span {
  font:11px 'Roboto'; 
  font-weight:400; 
  color:#f7f3eb; 
  text-align:center; 
  width:42px; 
  height:42px; 
  display:inline-block; 
  float:left; 
  overflow:hidden; 
  line-height:40px;
}

.jzdcal .jzdb:before {
  opacity:0.3; 
  content:'o';
}

.circle {
  border:1px solid #f7f3eb; 
  box-sizing:border-box!important; 
  border-radius:200px!important;
}

span[data-title]:hover:after, 
div[data-title]:hover:after {
  font:11px 'Roboto'; 
  font-weight:400; 
  content:attr(data-title); 
  position:absolute; 
  margin:0 0 100px; 
  background:#282423; 
  border:1px solid #f7f3eb; 
  color:#f7f3eb; 
  padding:5px; 
  z-index:9999; 
  min-width:150px; 
  max-width:150px;
}
	</style>

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Upcoming Events</h2>
				</div>
			</div>
			<div class="row events_row">
				
				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="images/day1.jpg" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">2</div>
							<div class="event_month">Mar</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">สอบ O-NET</a></div>
							<div class="event_tag ml-auto">สำคัญ</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="images/day2.jpg" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">26</div>
							<div class="event_month">Aug</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">สอบ GAT-PAT</a></div>
							<div class="event_tag ml-auto">สำคัญ</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event">
						<div class="event_image"><img src="images/day3.jpg" alt=""></div>
						<div class="event_date d-flex flex-column align-items-center justify-content-center">
							<div class="event_day">17</div>
							<div class="event_month">Jan</div>
						</div>
						<div class="event_body d-flex flex-row align-items-center justify-content-start">
							<div class="event_title"><a href="#">ยื่น Admission</a></div>
							<div class="event_tag ml-auto">สำคัญ</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row row-lg-eq-height">
				<!-- facebook -->
				<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTutor-Online-555203508313005%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" align ="right" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>			
			
				<!-- Blog Left -->
				<div class="col-lg-6">
					<div class="blog_left">
					     <a href="blog.php">
						<div class="blog_title">Welcome to Admission!</div>
						
						<div class="blog_categories">
							<div class="row categories_row">

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.php">
										<div class="blog_category">
											<div class="blog_category_image"><img src="images/blog_1.jpg" alt=""></div>
											<div class="blog_category_title">GAT-PAT</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.php">
										<div class="blog_category">
											<div class="blog_category_image"><img src="images/blog_2.jpg" alt=""></div>
											<div class="blog_category_title">Pat 1</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.php">
										<div class="blog_category">
											<div class="blog_category_image"><img src="images/blog_3.jpg" alt=""></div>
											<div class="blog_category_title">Pat 2</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.php">
										<div class="blog_category">
											<div class="blog_category_image"><img src="images/blog_4.jpg" alt=""></div>
											<div class="blog_category_title">Pat 3</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.php">
										<div class="blog_category">
											<div class="blog_category_image"><img src="images/blog_5.jpg" alt=""></div>
											<div class="blog_category_title">Pat 4</div>
										</div>
									</a>
								</div>

								<!-- Category -->
								<div class="col-md-4 blog_category_col">
									<a href="blog.php">
										<div class="blog_category">
											<div class="blog_category_image"><img src="images/blog_6.jpg" alt=""></div>
											<div class="blog_category_title">Pat 5</div>
										</div>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Blog Right -->

				<div class="col-lg-6">
					<div class="blog_right">
						
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

					<!-- Newsletter -->
					<div class="col-lg-3 footer_col">
						<div class="newsletter_container d-flex flex-column align-items-start justify-content-end">
							<div class="footer_logo mb-auto"><a href="#">TUTOR ONLINE</a></div>
		
		
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>