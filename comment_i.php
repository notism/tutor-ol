<?php
session_start();




// connect to the database
include('connect_db.php');

$c_user=$_POST['c_user'];
$c_detail=$_POST['c_detail'];


// get results from database

 $sql = "INSERT INTO c_comment (c_detail,c_user) VALUES ('$c_detail','$c_user')";
if(!mysqli_query($conn,$sql))
{
	
	echo "<h3>ห้ามออกความคิดเห็น";
}	
else
{
	header("location:soc_detail.php");
}
   


$conn->close();
?>