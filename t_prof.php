<?php
session_start();

?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>My Courses</title>
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
<link rel="stylesheet" type="text/css" href="css/main2.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
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
									<li><a href="index_a.php">Home</a></li>
									
									<li><a href="allcourse.php">My Class</a></li>
									<li  class="active"><a href="t_prof.php">My Profile</a></li>
									<li><a href="chat_g2.php">Chat</a></li>
									<li><a href="contact2.php">Contact</a></li>
								</ul>
							</nav>
							<div class="header_content_right ml-auto text-right">
								
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

	

	<!-- Language -->

	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_title">My Profile</div>
					<div class="header_search">
									
									<nav class="main_nav_contaner">
										<ul class="main_nav">
										<li><a href="edit2_profile.php">Edit Profile</a></li>
										</ul>
									</nav>
									
								</div>
								<!-- Hamburger -->

							
				</div>
			</div>
			<br><br><br>


		
		
			<?php
	



	include('connect_db.php');
// get results from database



$strid =  $_SESSION["ID"];

$strSQL = "SELECT * FROM user WHERE username = '".mysqli_real_escape_string($objCon,$strid)."'";
$objQuery = mysqli_query($objCon,$strSQL);
	
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	

	
	$objCon->close();
?>
						<br><br>
                        <div>
						<div class="instructors">
									<div class="row instructors_row">
										<div class="col-lg-4 col-md-6">
											<div class="instructor d-flex flex-row align-items-center justify-content-start">
												<div class="instructor_image">
												<div>
													<img src="images/<?php echo $objResult["photo"];?> "><br>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div><br>

							 <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกชื่อผู้ใช้" >
								วิชาที่สอน :<input class="input100" type="text" name="username" id= "username"  readonly="readonly" value="<?php  echo $objResult["education"]?>">
						    </div><br>	
                            <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกชื่อผู้ใช้" >
								username :<input class="input100" type="text" name="username" id= "username"  readonly="readonly" value="<?php  echo $objResult["username"]?>">
						    </div><br>	
													
							<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกชื่อ">
								ชื่อ :<input class="input100" type="text" name="firstname" id= "firstname" value="<?php  echo $objResult["firstname"]?>"readonly="readonly">
						    </div><br>
							<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกนามสกุล">
								นามสกุล :<input class="input100" type="text" name="lastname" id= "lastname"value="<?php  echo $objResult["lastname"] ?>" readonly="readonly">
						    </div><br>
							<div class="wrap-input100 validate-input m-t-85 m-b-35" >
								อายุ :<input class="input100" type="number" name="age" id= "age"value="<?php  echo $objResult["age"]?>" readonly="readonly">
						    </div><br>
							<div class="wrap-input100 validate-input m-t-85 m-b-35">
								ที่อยู่ :<input class="input100" type="textarea" name="address" id= "address"value="<?php  echo $e = $objResult["address"]?>" readonly="readonly">
						    </div><br>	
							<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกเบอร์โทรศํทพ์">
								เบอร์ติดต่อ :<input class="input100" type="tel" name="tel" id= "tel" value="<?php  echo $e = $objResult["tel"]?>"readonly="readonly">
								
						    </div><br>	
							<div class="wrap-input100 validate-input m-t-85 m-b-35">
								E-mail :<input class="input100" type="email" name="email" id= "email" value="<?php  echo $objResult["email"]?>"readonly="readonly">
						    </div>	
							</center>
							<br>

							<div>
                            <br><br><br>
                 
                     
							</div>
						</div>
					
					</div>
				</div>
			</div>
			
		</div><br><br><br><br>
			
		</div>
	</div>

	<!-- Courses -->



	

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