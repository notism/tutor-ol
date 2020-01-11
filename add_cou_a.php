<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">    
	<link rel="stylesheet" type="text/css" href="css/main2.css">
    <title>ADD</title>
	
	
</head>
<body>
<center><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('connect_db.php'); ?>
<?php

if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"images/".$_FILES["filUpload"]["name"])){
// connect to the database


$c_name=$_POST['name'];
$c_detail=$_POST['detail'];
$php=$_POST['php'];
$dephp=$_POST['dephp'];
$teach=$_POST['t_name'];
$images =$_FILES["filUpload"]["name"];


// get results from database

 $sql = "INSERT INTO courses (c_name, c_detail, php, dephp, teac, image) VALUES ('$c_name','$c_detail','$php','$dephp','$teach','$images')";
if(!mysqli_query($conn,$sql))
{
	echo "บันทึกไม่สำเร็จ!!";
	
}	
else
{
	echo "บันทึกสำเร็จ";
	
}
   
}


mysqli_close($conn);
?>
      
<div class="container-login100">			
<form method="POST" action="addclass_ad.php">
<input class="login100-form-btn" type="submit" name="Submit" value="กลับสู่หน้า Courses">
</form>
</body>
</html>