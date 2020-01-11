<?php
session_start();




include('connect_db.php');

// get results from database

 $sql = "UPDATE booking SET 
			


descrip = '".$_POST["descrip"]."'

WHERE booking_id = '".$_SESSION['bookingID']."' ";

 

$query = mysqli_query($conn,$sql);

 

if($query) {

header("location:allcourse.php");

}

 

mysqli_close($conn);
?>