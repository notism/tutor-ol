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
<body><div class="super_container">

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
									<li class="active"><a href="courses.php">Courses</a></li>
									<li><a href="#">Teacher</a></li>
									<li><a href="mycourse.php">My Courses</a></li>
									<li><a href="#">Blog</a></li>
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

								<div class="user"><a href="login.html"><i class="fa fa-user" aria-hidden="true"></i></a></div>
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
	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_title"><center>SELECT COURSES ᵔᴥᵔ </div>
				</div>
			</div>
			
		</div>
	</div>

	<!-- Form -->
	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					

<center><br><br>
<?php



// connect to the database
include('connect_db.php');


$c_name=$_POST['c_name'];
$t_name=$_POST['t_name'];
$date=$_POST['date'];
$time=$_POST['time'];
$place_b=$_POST['place_b'];
$u_name=$_POST['u_name'];


if($c_name == "English"){
	$_SESSION["count"]= 1;
}elseif($c_name == "ภาษาไทย"){
	$_SESSION["count"]= 2;
}elseif($c_name == "สังคมศึกษา"){
	$_SESSION["count"]= 3;
}elseif($c_name == "คณิตศาสตร์"){
	$_SESSION["count"]= 5;
}else{
	$_SESSION["count"]= 4;
}









 $sql = "INSERT INTO booking (c_name,t_name,date, time, place_b, u_name) VALUES ('$c_name','$t_name','$date','$time','$place_b','$u_name')";
if(!mysqli_query($conn,$sql))
{
	echo "<h3>ลงทะเบียนไม่สำเร็จ";
	
}	
else
{
	echo "<h3>ลงทะเบียนสำเร็จ!!";
	
}
   


$conn->close();
?>
		<br><br><br><br><br><br>
<form method="POST" action="up_count.php">
<button type="submit" class="button" >กลับ</button>
</form>
</body>
</html>