<?php
session_start();




// connect to the database
include('connect_db.php');

// get results from database

 $sql = "UPDATE booking SET 

date = '".$_POST["date"]."',
time = '".$_POST["time"]."',
place_b = '".$_POST["place_b"]."'


WHERE booking_id = '".$_SESSION["Bid"]."' ";

 

$query = mysqli_query($conn,$sql);

 

if($query) {
	

	header("location:mycourse.php");

}

 

mysqli_close($conn);
?>