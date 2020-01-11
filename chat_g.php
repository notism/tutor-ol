<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rChat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css" media="screen"
    />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/chatbox.css">
	

<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
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
    <div class="container">
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
									<li ><a href="courses.php">Courses</a></li>						        
									<li><a href="mycourse.php">My Courses</a></li>
									<li  class="active"><a href="chat_g.php">Chat</a></li>
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
	
	</header>	
	
        <main>
		<center>
		<h1>CHAT BOX</h1>
			<a href="chat_pri.php">private chat</a>
            <div class="userSettings"><br>
                <label for="userName">Nickname:</label>
                <input id="userName" type="text" placeholder="กรอกชื่อเล่น" maxlength="32" value=""  >
            </div>
			</center>
			<center>
            <div class="chat">
			
                <div id="chatOutput"></div>
                <input id="chatInput" type="text" placeholder="Input Text here" maxlength="128">
                <button id="chatSend" class="btn btn-info">send</button>
            </div>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/rChat.js"></script>
</body>
</html>
<script>
$(document).ready(function() {
    var chatInterval = 250; //refresh interval in ms
    var $userName = $("#userName");
    var $chatOutput = $("#chatOutput");
    var $chatInput = $("#chatInput");
    var $chatSend = $("#chatSend");

    function sendMessage() {
        var userNameString = $userName.val();
        var chatInputString = $chatInput.val();

        $.get("./write.php", {
            username: userNameString,
            text: chatInputString
        });

        $userName.val("");
        retrieveMessages();
    }

    function retrieveMessages() {
        $.get("./read.php", function(data) {
            $chatOutput.html(data); //Paste content into chat output
        });
    }

    $chatSend.click(function() {
        sendMessage();
    });

    setInterval(function() {
        retrieveMessages();
    }, chatInterval);
});
</script>