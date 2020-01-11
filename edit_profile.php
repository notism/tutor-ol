<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
	<link rel="stylesheet" type="text/css" href="css/main2.css">
    <title>แก้ไข้ข้อมูลส่วนตัว</title>
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
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">

	
</head>
<body>  
	<div class="language">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="language_title">แก้ไขข้อมูลส่วนตัว</div>
					<form method="POST" action="edit_up.php"enctype="multipart/form-data" >
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
								</div>
						
                            <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกชื่อผู้ใช้" >
								username :<input class="input100" type="text" name="username" id= "username"  readonly="readonly" value="<?php  echo $objResult["username"]?>">
						    </div><br>	
							<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "โปรดกรอกชื่อ">
								password :<input class="input100" type="password" name="pass" id= "pass" value="<?php  echo $objResult["password"]?>">
						    </div><br>							
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
						    </div><br>
							<div class="wrap-input100 validate-input m-t-85 m-b-35">
							Picture : <input class="input100" type="file" name="filUpload">	
							</div><br>								
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