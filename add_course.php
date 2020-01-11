<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
	<link rel="stylesheet" type="text/css" href="css/main2.css">
    <title>ADD</title>
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
									<li><a href="chat_g3.php">Chat</a></li>
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

	</header>
	
	<br><br><br> 
	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_title">Add Courses</div>
						
				</div>
			</div>
			<br><br>
			<form method="POST" action="add_cou_a.php" enctype="multipart/form-data">
                        <div>
                            <div class="wrap-input100 validate-input m-t-85 m-b-35" >
								<input class="input100" type="text" name="name" id= "name" placeholder="ชื่อคอร์ส" required>
						    </div>
							<div class="wrap-input100 validate-input m-t-85 m-b-35">
								<input class="input100" type="textarea" name="detail" id= "detail" placeholder="รายละเอียดคอร์ส">
						    </div>
							
							<div class="wrap-input100 validate-input m-t-85 m-b-35" >
								<input class="input100" type="text" name="t_name" id= "t_name" placeholder="ชื่อหัวหน้าคอร์ส"required>
						    </div>
							<div class="wrap-input100 validate-input m-t-85 m-b-35" >
								<input class="input100" type="text" name="php" id= "php" placeholder="PHP" >
						    </div>
							<div class="wrap-input100 validate-input m-t-85 m-b-35" >
								<input class="input100" type="text" name="dephp" id= "dephp" placeholder="PHP_detail">
						    </div>
								
							
							<div class="wrap-input100 validate-input m-t-85 m-b-35">
							Picture : <input class="input100" type="file" name="filUpload" >	
							</div><br>
							
							
							
						
<br><br>
							<div>
							
							
                           <Table align="center">
							<TR>
							
							<a href="./images/course_1.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_1.jpg" width="90" /></a>
							<a href="./images/course_2.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_2.jpg" width="90" /></a>
							<a href="./images/course_3.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_3.jpg" width="90" /></a>
							<a href="./images/course_4.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_4.jpg" width="90" /></a>
							</tr>
							<tr>
							<a href="./images/course_5.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_5.jpg" width="90" /></a>
							<a href="./images/course_6.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_6.jpg" width="90" /></a>
							<a href="./images/course_7.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_7.jpg" width="90" /></a>
							<a href="./images/course_8.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_8.jpg" width="90" /></a>
							</tr>
							<tr>
							<a href="./images/course_9.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_9.jpg" width="90" /></a>
							<a href="./images/course_10.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_10.jpg" width="90" /></a>
							<a href="./images/course_11.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_11.jpg" width="90" /></a>
							<a href="./images/course_12.jpg" rel="prettyPhoto[gallery1]"><img src="./images/course_12.jpg" width="90" /></a>
							</TR>
							</Table><br>
                            <input class="login100-form-btn" type="submit" name="Submit" value="ADD COURSES">
                     
							</div>
						</div>
					</form>
					
					</div>
				</div>
			</div>
			
		</div>
   
      		
                
						
    
</body>
</html>

