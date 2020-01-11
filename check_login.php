<?php
session_start();

?>
<html>
<head>
    <meta charset="UTF-8">    
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Login</title>
	
	
</head>
<body>
<center><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('connect_db.php'); ?>

<?php
	
	
	
	
	
	$strSQL = "SELECT * FROM user WHERE username = '".mysqli_real_escape_string($objCon,$_POST['username'])."'and Password = '".mysqli_real_escape_string($objCon,$_POST['pass'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
		echo "ชื่อผู้ใช้และรหัสผ่านไม่ถูกต้อง";
		
		}else{
			$_SESSION['username'] = $objResult['username'];
			$_SESSION['user_id'] = $objResult['uid'];
			$_SESSION['ID']= $objResult["username"] ;
			$_SESSION['User_ID']=$objResult["firstname"]." ".$objResult["lastname"] ;
			
			if($objResult["status"] == "TUTOR"){
				header("location:index_a.php");
			}elseif($objResult["status"] == "ADMIN"){
				header("location:index_i.php");
			}else{
			header("location:index_u.php");
			}
	}
	$objCon->close();
	
?>
<div class="container-login100">			
<form method="POST" action="login.php">
<input class="login100-form-btn" type="submit" name="Submit" value="กลับสู้หน้าล็อกอิน">
</form>
</body>
</html>
