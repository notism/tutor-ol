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
									
									<li class="active"><a href="allcourse.php">My Class</a></li>
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

	
	
	<!-- Home -->

	

	<!-- Language -->

	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_title">ให้คำแนะนำ</div>
					<br><br>
					<form action="okcomment.php" method="post">
								
								<textarea name="descrip" cols="95"rows="5" required></textarea>
								
								<div class="col-lg-6 contact_col">
								<button type="submit" class="button" >ยืนยัน</button>
								
								</div>
							</form>
				</div>
			</div>
			<br><br><br>


		
		
			<?php
	



						// connect to the database
						include('connect_db.php');
// get results from database



$strid =  $_GET["booking_id"];
$_SESSION['bookingID']=$strid;
$sql = "SELECT * FROM booking WHERE booking_id = '".mysqli_real_escape_string($conn,$strid)."'" ;
$rs=$conn->query($sql);



echo "<table border='0' cellpadding='10' width=80%>"; //open table
echo "<tr>
<th><h4><center>ชื่อคอร์ส</th>
<th><h4><center>วันที่</th>
<th><h4><center>เวลา</th>
<th><h4><center>สถานที่</th>
<th><h4><center>ผู้ลงทะเบียน</th>
<th><h4><center>คำแนะนำ</th>
<th></th>
 </tr>";
// loop through results of database query, displaying them in the table
while($row = $rs->fetch_assoc()) {
 
echo "<tr>";
echo '<td><center>' . $row['c_name'] . '</td>';
echo '<td><center>' . $row['date'] . '</td>';
echo '<td><center>' . $row['time'] . '</td>';
echo '<td><center>' . $row['place_b'] . '</td>';
echo '<td><center>' . $row['u_name'] . '</td> ';
echo '<td><center>' . $row['descrip'] . '</td> ';
echo '<td></td>';
echo "</tr>";
}
echo "</table>"; // close table

$conn->close(); // close database connection
?><br><br><br><br><br><br><br><br><br><br><br><br>
			
		</div>
	</div>

	<!-- Courses -->



	

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_body">
			<div class="container">
				<div class="row">

					<!-- Newsletter -->
					
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses.js"></script>
</body>
</html>