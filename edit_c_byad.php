<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">    
	<link rel="stylesheet" type="text/css" href="css/main2.css">
    <title>EDIT</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
		<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	
	

</head>
<body> 
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
									<li ><a href="index_i.php">Home</a></li>									
									<li ><a href="allc.php">All Class</a></li>
									<li><a href="stu.php">Students</a></li>
									<li><a href="tea.php">Tutor</a></li>
									<li class="active"><a href="addclass_ad.php">Course</a></li>
								</ul>
							</nav>
							
							<div class="header_content_right ml-auto text-right">
								<div class="header_search">
									
									
									
								</div>
								
								<!-- Hamburger -->
								

								<div class="user"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
								</div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</header><br><br><br> 
	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_title">EDIT COURSES</div>
						
				</div>
			</div>
			<?php
	


include('connect_db.php');
// get results from database



$strid =  $_GET["course_id"];
$_SESSION["c_id_by_ad"] =$strid;
$strSQL = "SELECT * FROM courses WHERE course_id = '".mysqli_real_escape_string($objCon,$strid)."'";
$objQuery = mysqli_query($objCon,$strSQL);
	
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	

	
	$objCon->close();
?>
			<br><br>
			<form method="POST" action="edit_c_byad_sql.php"enctype="multipart/form-data">
                        <div>
                            <div class="wrap-input100 validate-input m-t-85 m-b-35" >
								ชื่อคอร์ส<input class="input100" type="text" name="name" id= "name" value="<?php  echo $objResult["c_name"]?>" required>
						    </div>
							<div class="wrap-input100 validate-input m-t-85 m-b-35">
								รายละเอียดคอร์ส<input class="input100" type="textarea" name="detail" id= "detail" value="<?php  echo $objResult["c_detail"]?>">
						    </div>
							
							<div class="wrap-input100 validate-input m-t-85 m-b-35" >
								ชื่อหัวหน้าคอร์ส<input class="input100" type="text" name="t_name" id= "t_name" value="<?php  echo $objResult["teac"]?>" required>
						    </div>
							<div class="wrap-input100 validate-input m-t-85 m-b-35" >
								จำนวนผู้ลงทะเบียน <input class="input100" type="text" name="regis" id= "regis" value="<?php  echo $objResult["regis"]?>">
						    </div>
							<div class="wrap-input100 validate-input m-t-85 m-b-35" >
								php :<input class="input100" type="text" name="php" id= "php" value="<?php  echo $objResult["php"]?>" >
						    </div>
							<div class="wrap-input100 validate-input m-t-85 m-b-35" >
								php detail :<input class="input100" type="text" name="dephp" id= "dephp" value="<?php  echo $objResult["dephp"]?>">
						    </div>								
						
							<div class="wrap-input100 validate-input m-t-85 m-b-35">
							Picture : <input class="input100" type="file" name="filUpload" >	
							</div><br>
							<center><img src="images/<?php echo $objResult["image"];?> "><br>
								<label><?php  echo $objResult["image"]?></label>
							
						
<br><br>
							<div>
							
							
                           <Table align="center">
							<TR>
							
							<a href="./images/course_1.jpg"><img src="./images/course_1.jpg" width="90" /></a>
							<a href="./images/course_2.jpg" ><img src="./images/course_2.jpg" width="90" /></a>
							<a href="./images/course_3.jpg"><img src="./images/course_3.jpg" width="90" /></a>
							<a href="./images/course_4.jpg" ><img src="./images/course_4.jpg" width="90" /></a>
							</tr>
							<tr>
							<a href="./images/course_5.jpg" ><img src="./images/course_5.jpg" width="90" /></a>
							<a href="./images/course_6.jpg" ><img src="./images/course_6.jpg" width="90" /></a>
							<a href="./images/course_7.jpg" ><img src="./images/course_7.jpg" width="90" /></a>
							<a href="./images/course_8.jpg" ><img src="./images/course_8.jpg" width="90" /></a>
							</tr>
							<tr>
							<a href="./images/course_9.jpg" ><img src="./images/course_9.jpg" width="90" /></a>
							<a href="./images/course_10.jpg" ><img src="./images/course_10.jpg" width="90" /></a>
							<a href="./images/course_11.jpg" ><img src="./images/course_11.jpg" width="90" /></a>
							<a href="./images/course_12.jpg" ><img src="./images/course_12.jpg" width="90" /></a>
							</TR>
							</Table><br>
                            <input class="login100-form-btn" type="submit" name="Submit" value="EDIT COURSES">
                     
							</div>
						</div>
					</form>
					
					</div>
				</div>
			</div>
			
		</div>
   
      		
                
						
    
</body>
</html>

