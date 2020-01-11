<?php
session_start();

?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>CLASS</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
									<li ><a href="index_i.php">Home</a></li>									
									<li  class="active"><a href="allc.php">All Class</a></li>
									<li><a href="stu.php">Students</a></li>
									<li><a href="tea.php">Tutor</a></li>
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
	
	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>		
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index_i.php">Home</a></li>									
									<li class="menu_mm"><a href="allc.php">All Class</a></li>
									<li class="menu_mm"><a href="stu.php">Students</a></li>
									<li class="menu_mm"><a href="tea.php">Tutor</a></li>
									<li class="menu_mm"><a href="addclass_ad.php">Course</a></li>
									<li class="menu_mm"><a href="chat_g3.php">Chat</a></li>
			</ul>
		</nav>
		<div class="menu_extra">	
			<div class="menu_social">
							
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
					<div class="language_title">ข้อมูล CLASS</div>
				</div>
			</div>
			<br><br><br>

<div class="container">
   <br />

   <div class="form-group">
    <div class="input-group">
    
     <input type="text" name="search_text" id="search_text" placeholder="Search Class " class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>

		
		
			<br><br><br>
		
		<br><br><br><br><br><br><br><br><br><br><br><br>
			
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

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch2.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>