<html>
<head>
    <meta charset="UTF-8">    
	<link rel="stylesheet" type="text/css" href="css/main2.css">
    <title>สมัครสมาชิก</title>
	
	
</head>
<body>
<center><br><br><br><br><br><br><br><br><br><br><br><br>

<?php



// connect to the database
include('connect_db.php');
$username=$_POST['username'];
$password=$_POST['pass'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

$tel=$_POST['tel'];
$address=$_POST['address'];
$age=$_POST['age'];
$email=$_POST['email'];

// get results from database

 $sql = "INSERT INTO user (username,password,firstname, lastname,  tel,address ,age ,email) VALUES ('$username','$password','$firstname','$lastname','$tel','$address','$age','$email')";
if(!mysqli_query($conn,$sql))
{
	echo "บางอย่างไม่ถูกต้อง";
	
}	
else
{
	echo "สมัครสมาชิกสำเร็จ!!";
}
   


$conn->close();
?>
      
<div class="container-login100">			
<form method="POST" action="login.php">
<input class="login100-form-btn" type="submit" name="Submit" value="กลับสู้หน้าล็อกอิน">
</form>
</body>
</html>