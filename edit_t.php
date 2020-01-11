<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
	<link rel="stylesheet" type="text/css" href="css/main2.css">
    <title>Edit</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
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
									<li  class="active"><a href="tea.php">Tutor</a></li>
									<li><a href="addclass_ad.php">Course</a></li>
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
	
	
</head>

<body>  
	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_title">แก้ไขข้อมูล TUTOR</div>
					<form method="POST" action="edit_tea.php"enctype="multipart/form-data" >
                      <?php
	

include('connect_db.php');
// get results from database



$strid =  $_GET["uid"];
$_SESSION["u_id"] =$strid;
$strSQL = "SELECT * FROM user WHERE uid = '".mysqli_real_escape_string($objCon,$strid)."'";
$objQuery = mysqli_query($objCon,$strSQL);
	
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	

	
	$objCon->close();
?>
						<br><br>
                        <div>
							
							สถานะ : <select name="stat" class="input1" required>				 
									<option value="TUTOR">TUTOR</option>
									<option value="STU">STUDENT</option>
									
									</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							วิชาที่สอน : <select name="education" class="input1"required >
									<option value="<?php  echo $objResult["education"]?>"><?php  echo $objResult["education"]?></option>
									<option value="ภาษาไทย">ภาษาไทย</option>
									<option value="English">English</option>
									<option value="สังคมศึกษา">สังคมศึกษา</option>
									<option value="คณิตศาสตร์">คณิตศาสตร์</option>
									<option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
								</select><br>	<br>	
                            						
							<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกชื่อ">
								ชื่อ :<input class="input100" type="text" name="firstname" id= "firstname" value="<?php  echo $objResult["firstname"]?>">
						    </div><br>
							<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกนามสกุล">
								นามสกุล :<input class="input100" type="text" name="lastname" id= "lastname"value="<?php  echo $objResult["lastname"] ?>" >
						    </div><br>
							<div class="wrap-input100 validate-input m-t-85 m-b-35" >
								อายุ :<input class="input100" type="number" name="age" id= "age"value="<?php  echo $objResult["age"]?>" >
						    </div><br>
							<div class="wrap-input100 validate-input m-t-85 m-b-35">
								ที่อยู่ :<input class="input100" type="textarea" name="address" id= "address"value="<?php  echo $objResult["address"]?>" >
						    </div><br>	
							<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกเบอร์โทรศํทพ์">
								เบอร์ติดต่อ :<input class="input100" type="tel" name="tel" id= "tel" value="<?php  echo $objResult["tel"]?>">
								
						    </div><br>	
							<div class="wrap-input100 validate-input m-t-85 m-b-35">
								E-mail :<input class="input100" type="email" name="email" id= "email" value="<?php  echo $objResult["email"]?>">
						    </div>	
							</center>
							<br>

							<div>
                            <br><br><br><br><br>
                            <input class="login100-form-btn" type="submit" name="Submit" value="แก้ไข้ข้อมูล">
                     
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
			
		</div>
   
      		
                
						
    
</body>
</html>