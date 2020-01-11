<?php
session_start();




// connect to the database
	include('connect_db.php');

// get results from database

$sql = "UPDATE courses SET 
regis = regis + 1
WHERE course_id = '".$_SESSION["count"]."' ";

 

$query = mysqli_query($conn,$sql);

 

if($query) {
	

	header("location:courses.php");

}

 

mysqli_close($conn);
?>